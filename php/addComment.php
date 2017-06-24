<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/1 0001
 * Time: 16:29
 */

include_once "config.php";

date_default_timezone_set("Asia/Shanghai");

$content  = $_POST['content'];
$recordid = $_POST['recordid'];
$time     = date("Y-m-d H:i:s");

$sql = "INSERT INTO `comment` VALUES (:recordid, :time, :content); ";
$parameter = array(
  ':recordid' => $recordid,
  ':time' => $time,
  ':content' => $content
);
//构造PDO预处理语句
$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//执行预处理语句
$status = $stmt->execute($parameter);

//处理执行SQL语句结果
if ($status)
{
  $redirect = "../success.php";
  echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
}
else
{
  $redirect = "../failed.php";
  echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
}
