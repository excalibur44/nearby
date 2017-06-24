<?php
/**
 * Created by PhpStorm.
 * User: excalibur
 * Date: 2017/5/28
 * Time: 23:27
 */

$dbname   = 'nearby';
$user     = 'nearby';
$password = 'nearby';

$dbh = new PDO("mysql:host=localhost; dbname=$dbname", $user, $password);
$dbh->query('set names utf8');

/**
 * 执行 sql 获取数据
 * 无错误：返回值大于等于零，返回数据
 * @param $sql
 * @param $param
 * @return array|int
 */
/*
使用示范：
    $data = sql_select("SELECT * FROM `borrow` WHERE itemid = :itemID", array(":itemID" => 10001));
    if ($data >= 0)
        var_dump($data);
    else
        echo "error";
 */
function sql_select($sql, $param = array())
{
  global $dbh;
  $sth = $dbh -> prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth -> execute($param);
  if ($sth -> errorInfo()[1] == null)
    return $sth -> fetchAll();
  else
    return -1;
}

/**
 * 执行sql语句
 * 无错误：返回值大于等于零，返回受影响行数
 * @param $sql
 * @return int
 */
/*
使用示范：
$data = sql_exec("SELECT * FROM `borrow` WHERE itemID=10002");
if ($data >= 0)
    echo $data;
else
    echo "error";
*/
// dangerous
function sql_exec($sql)
{
  global $dbh;
  $col = $dbh -> exec($sql);
  if ($dbh->errorInfo()[0] == 0)
    return $col;
  else
    return -1;
}
