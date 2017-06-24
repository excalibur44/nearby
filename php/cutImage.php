<?php
/**
 * Created by PhpStorm.
 * User: excalibur
 * Date: 2017/6/2
 * Time: 23:15
 */

/**
 * 处理上传的文件，以数组的形式返回文件名
 * @param $filename
 */
function cutImage($filename)
{
  $image_path = '../itemPhoto/' . $filename;
  //创建源图的实例
  $src_image = imagecreatefromstring(file_get_contents($image_path));
  //裁剪区域左上角的点的坐标
  $src_width  = getimagesize($image_path)[0];
  $src_height = getimagesize($image_path)[1];
  $min_wh = ($src_width  > $src_height) ? $src_height : $src_width;
  $src_x  = ($src_width  - $min_wh) / 2;
  $src_y  = ($src_height - $min_wh) / 2;
  //裁剪区域的宽和高
  $cut_width  = $min_wh;
  $cut_height = $min_wh;
  //最终保存成图片的宽和高，和源要等比例，否则会变形
  $new_size   = 512;
  $new_width  = $new_size;
  $new_height = $new_size;
  //将裁剪区域复制到新图片上，并根据源和目标的宽高进行缩放或者拉升
  $new_image = imagecreatetruecolor($new_width, $new_height);
  //抗锯齿
  if (function_exists('imageantialias')) {
    imageantialias($new_image, true);
  }
  imagecopyresampled($new_image, $src_image, 0, 0, $src_x, $src_y, $new_width, $new_height, $cut_width, $cut_height);
  //输出图片
  //header('Content-Type: image/jpeg');
  imagejpeg($new_image, $image_path);
  imagedestroy($src_image);
  imagedestroy($new_image);
}
