<?php

// 连接数据库
require ("config.php");
// 处理上传的文件
require ("upload_files.php");
// 检查是否登录
include "isLogin.php";

// 处理数据
date_default_timezone_set("Asia/Shanghai");
$data = $dbh->query('select * from `item`;');

$itemid       = 10001 + count($data->fetchAll());
$stuid        = $_COOKIE['stuid'];
$name         = $_POST['name'];
$type         = $_POST['type'];
$status       = 0;
$price        = $_POST['price'];
$deposit      = $_POST['deposit'];
$description  = $_POST['description'];
$time         = date("Y-m-d H:i:s");
$photo        = upload_files();


$sql = "INSERT INTO `item` VALUES (:itemid, :stuid, :name, :type, :status, :price, :deposit,
        :description, :time, :photo1, :photo2, :photo3, :photo4); ";
$parameter = array(
    ":itemid"       => $itemid,
    ":stuid"        => $stuid,
    ":name"         => $name,
    ":type"         => $type,
    ":status"       => $status,
    ":price"        => $price,
    ":deposit"      => $deposit,
    ":description"  => $description,
    ":time"         => $time,
    ":photo1"       => $photo[0],
    ":photo2"       => $photo[1],
    ":photo3"       => $photo[2],
    ":photo4"       => $photo[3]
);
//构造PDO预处理语句
$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//执行预处理语句
$status = $stmt->execute($parameter);

//处理执行SQL语句结果
if ($status)
{
  $redirect = "../orderlist.php";
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

