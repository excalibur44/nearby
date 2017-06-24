<?php
include_once "config.php";
include_once "generateAvatar.php";
//var_dump($_POST);

//检测用户是否已存在
if ( sql_select("SELECT * FROM `user` WHERE stuid = :stuid;", array(":stuid" => $_POST['stuid'])) )
{ //有数据则判别为真，无数据为empty，判别为否
  $redirect = "../failed.php?message=用户已存在&buttonText=返回注册页&buttonURL=signup.html";
  echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
  exit();
}

//构造SQL语句
$sql = " INSERT INTO `user` VALUES (:username, :name, :stuid, :password, :phone, :academy, :sex, :wechat, :email, :avatar) ";
//构造参数
$parameter = array(
  ':username' => $_POST['username'],
  ':name'     => $_POST['name'],
  ':stuid'    => $_POST['stuid'],
  ':password' => sha1($_POST['password']),
  ':phone'    => $_POST['phone'],
  ':academy'  => $_POST['academy'],
  ':sex'      => $_POST['sex'],
  ':wechat'   => $_POST['wechat'],
  ':email'    => $_POST['email'],
  ':avatar'   => generateAvatar($_POST['username'], $_POST['stuid'])
);

//var_dump($parameter);

//构造PDO预处理语句
$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//执行预处理语句
$status = $stmt->execute($parameter);

//处理执行SQL语句结果
$redirect = "../success.php?message=注册成功&buttonText=现在登录&buttonURL=login.html";
if (!$status)
  $redirect = "../failed.php?message=注册失败";

echo "<script language=\"javascript\" type=\"text/javascript\">
      window.location.href=\"$redirect\"
      </script>";

