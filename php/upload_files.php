<?php
/**
 * Created by PhpStorm.
 * User: excalibur
 * Date: 2017/3/14
 * Time: 14:03
 */

require "cutImage.php";

/**
 * 处理上传的文件，以数组的形式返回文件名
 * @return array|int
 */
function upload_files()
{
  $path = "../itemPhoto";
  $response = array(null, null, null, null);
  $i = 0;

  foreach ($_FILES as $file)
  {
    if ($file['error'] === UPLOAD_ERR_NO_FILE)
        continue;
    if ($file['error'] != UPLOAD_ERR_OK)
        return -1;

    date_default_timezone_set("Asia/Shanghai");
    $time = date("ymd-His");
    $random = mt_rand(1000, 9999);
    $filename = "$time-$random.jpg"; //varchar(22)
    if (move_uploaded_file($file["tmp_name"], "$path/$filename") == true)
    {
      cutImage($filename);
      $response[$i++] = "$filename";
    }
  }

  return $response;
}
