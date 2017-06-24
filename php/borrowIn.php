<?php

//链接数据库
require("config.php");
// 检查是否登录
include "isLogin.php";

//处理数据
$data = $dbh->query('select * from `record`;');

$recordid   = 20001 + count($data->fetchAll());
$itemid     = $_POST['itemid'];
$stuid      = $_COOKIE['stuid'];
$remark     = $_POST['remark'];
$duration   = $_POST['duration']; // 按天数算
//获取时间
date_default_timezone_set("Asia/Shanghai");
$time = date("Y-m-d H:i:s");

//构造SQL语句
$sql = " INSERT INTO `record` VALUES (:recordid, :itemid, :borrower, :time, :remark, :duration, :status, :iscomment)";
//构造参数
$parameter = array(
    ':recordid' => $recordid,
    ':itemid'   => $itemid,
    ':borrower' => $stuid,
    ':time'     => $time,
    ":remark"   => $remark,
    ':duration' => $duration,
    'status'    => 0,
    'iscomment' => 0
);
//构造PDO预处理语句
$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//执行预处理语句
$status = $stmt->execute($parameter);

//处理执行SQL语句结果
if ($status)
{
  $redirect = "../success.php?message=借入成功&buttonText=去联系出租者&buttonURL=notice.php";
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
