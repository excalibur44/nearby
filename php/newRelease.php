<?php

// 连接数据库
include_once ("config.php");
// 检查是否登录
include_once "isLogin.php";

// 处理数据
date_default_timezone_set("Asia/Shanghai");
$data = $dbh->query('select * from `task`;');

$taskid   = 10001 + count($data->fetchAll());
$stuid    = $_COOKIE['stuid'];
$theme    = $_POST['theme'];
$detail   = $_POST['detail'];
$time     = date("Y-m-d H:i:s");
$location = $_POST['location'];
$price    = $_POST['price'];


$sql = "INSERT INTO `task` VALUES (:taskid, :stuid, :theme, :detail, :time, :location, :price); ";
$parameter = array(
    ":taskid"   => $taskid,
    ":stuid"    => $stuid,
    ":theme"    => $theme,
    ":detail"   => $detail,
    ":time"     => $time,
    ":location" => $location,
    ":price"    => $price
);
//构造PDO预处理语句
$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//执行预处理语句
$status = $stmt->execute($parameter);

//处理执行SQL语句结果
if ($status)
{
  $redirect = "../order_my_release.php";
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

