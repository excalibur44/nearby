<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/2 0002
 * Time: 14:21
 */

include_once "config.php";
include_once "isLogin.php";

$stuid    = $_COOKIE['stuid'];
$recordid = $_GET['recordid'];
$recordInfo = sql_select("SELECT * FROM record WHERE record.recordid = :recordid AND record.borrower = :stuid",
  array(":recordid" => $recordid, ":stuid"    => $stuid));

$itemid = $recordInfo[0]['itemid'];
$sql = "UPDATE item SET item.status = (item.status + 1)%2
        WHERE item.itemid = :itemid;";
$parameter = array(
  ":itemid" => $itemid
);

//构造PDO预处理语句
$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//执行预处理语句
$status = $stmt->execute($parameter);

//处理执行SQL语句结果
$redirect = "../success.php?message=确认成功";
if (!$status)
  $redirect = "../failed.php";

echo "<script language=\"javascript\" type=\"text/javascript\">
      window.location.href=\"$redirect\"
      </script>";