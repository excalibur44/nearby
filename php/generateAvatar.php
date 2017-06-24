<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/2 0002
 * Time: 15:32
 */

/**
 * 生成用户头像
 * @param $username
 * @param $stuid
 * @return string
 */
function generateAvatar($username, $stuid)
{
  require(dirname(__FILE__) . "/generateAvatar/MDAvatars.php");
  $Avatar = new Md\MDAvatars(mb_substr($username, 0, 1), 256);
  $avatarPNG = $stuid . '.png';
  $Avatar->Save("../avatar/$avatarPNG");
  $Avatar->Free();
  return $avatarPNG;
}
