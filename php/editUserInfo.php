<?php
include_once "config.php";
include_once "isLogin.php";
include_once "generateAvatar.php";
$stuid = $_COOKIE['stuid'];
//var_dump($_POST);

//构造SQL语句
$sql = " UPDATE `user` SET `username`=:username,`name`=:name,`phone`=:phone,`academy`=:academy,`sex`=:sex,`wechat`=:wechat,`email`=:email, `avatar`=:avatar
WHERE `stuid` = :stuid ";
//构造参数
$parameter = array(
  ':username' => $_POST['username'],
  ':name'     => $_POST['name'],
  ':phone'    => $_POST['phone'],
  ':academy'  => $_POST['academy'],
  ':sex'      => $_POST['sex'],
  ':wechat'   => $_POST['wechat'],
  ':email'    => $_POST['email'],
  ':stuid'    => $stuid,
  ':avatar'   => generateAvatar($_POST['username'], $stuid)
);
//构造PDO预处理语句
$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//执行预处理语句
$status = $stmt->execute($parameter);

//处理执行SQL语句结果
$redirect = "../success.php?message=修改成功&buttonText=返回个人资料页&buttonURL=me.php";
if (!$status)
  $redirect = "../failed.php?message=修改失败&buttonText=返回个人资料页&buttonURL=me.php";

echo "<script language=\"javascript\" type=\"text/javascript\">
      window.location.href=\"$redirect\"
      </script>";
