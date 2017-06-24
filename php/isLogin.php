<?php
/**
 * Created by PhpStorm.
 * User: excalibur
 * Date: 2017/5/31
 * Time: 19:20
 */

require_once "config.php";

if (isset($_COOKIE['token']) && isset($_COOKIE['stuid']))
{
  $result = sql_select("SELECT * FROM `tokens` WHERE stuid = :stuid AND token = :token;",
    array(":stuid" => $_COOKIE['stuid'], ":token" => $_COOKIE['token']));
  if ( !$result )
  { //有数据则判别为假，无数据为empty，取反后判别为真
    $redirect = "login.html";
    echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
    exit();
  }
}
else
{
  $redirect = "login.html";
  echo "<script language=\"javascript\" type=\"text/javascript\">
        window.location.href=\"$redirect\"
        </script>";
  exit();
}
