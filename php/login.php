<?php
include_once "config.php";

$stuid    = $_POST['stuid'];
$password = $_POST['password'];

//检测用户是否已存在
$userInfo = sql_select("SELECT * FROM `user` WHERE stuid = :stuid;", array(":stuid" => $_POST['stuid']));
if ( $userInfo )
{ // 有数据则判别为真，无数据为empty，判别为否
  if ( $userInfo[0]['password'] == sha1($password))
  { // 判断密码是否匹配
    // 若匹配：
    // 生成 token
    $token = sha1($userInfo[0]['password']."".rand(1000, 9999));
    // 获取7天之后的时间
    date_default_timezone_set("Asia/Shanghai");
    $deadline = date("Y-m-d H:i:s", strtotime('+7 days'));
    // 写入 token 表
    $sql = " INSERT INTO `tokens` VALUES (:stuid, :token, :deadline) ";
    //构造参数
    $parameter = array(
      ':stuid'      => $stuid,
      ':token'      => $token,
      ':deadline'   => $deadline
    );
    //构造PDO预处理语句
    $stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    //执行预处理语句
    $status = $stmt->execute($parameter);
    if ($status)
    {
      // 写入cookies
      setcookie('stuid', $stuid, time()+60*60*24*7, '/', $_SERVER['HTTP_HOST']);
      setcookie('token', $token, time()+60*60*24*7, '/', $_SERVER['HTTP_HOST']);
      // 返回到页面
      $redirect = "../index.php";
      echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
      exit();
    }
    else
    {
      $redirect = "../failed.php";
      echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
      exit();
    }
  }
  else
  {
    $redirect = "../failed.php?message=密码错误&buttonText=返回登录页&buttonURL=login.html";
    echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
    exit();
  }
}
else
{
  $redirect = "../failed.php?message=用户不存在&buttonText=现在注册&buttonURL=signup.html";
  echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
  exit();
}