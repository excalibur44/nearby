<?php
include_once "php/config.php";
include_once "php/doNotCache.php";
$sql = 'SELECT taskid, avatar, detail, username, price, time FROM task, user, record
        WHERE record.accepter = :stuid AND user.stuid = task.stuid AND task.taskid = record.taskid ORDER BY task.time DESC ;';
$array = array(
  'stuid' => $_COOKIE['stuid']//2016222003
);
$data = sql_select($sql, $array);
//var_dump($data);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- customize css -->
  <link href="css/nearby.css" rel="stylesheet">
  <!-- Bootstrap -->
  <title>深大镖局</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--  <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
  <script src="js/jquery.min.js"></script>
  <!--  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>-->
  <script src="js/bootstrap.min.js"></script>
  <!--  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body style="background-color: #eeeeee;">
<!-- 任务列表-->
<!--      transaction 1-->
<main class="container-fluid" style="padding-top: 90px;">
  <!-- 任务列表-->
  <div class="row">
    <!-- transaction 1 -->
    <div class="col-xs-12 card-box">
      <div class="card">
        <img src="avatar/avatar_1.jpg" style="height: 96px; width: 96px; float: left;"
             alt="item-1-main-photo" class="img-responsive img-rounded">
        <div class="row" style="padding: 0 10px; height: 100%; float: left; width: calc(100% - 76px);">
          <div class="col-xs-12" style="height: 33%;">
            <span style="font-weight: bold; font-size: 22px;">发布者名称</span>
            <span style="float: right">未完成</span>
          </div>
          <div class="col-xs-12" style="height: 33%; color: #1A98D5; margin-top: 8px;">有谁顺路。。。。。。</div>
          <div class="col-xs-12"
               style="height: 33%; color: #cccccc; margin-top: 9px; padding-right: 0; font-size: 12px;">
            悬赏金额：X元
            <span style="float: right;">一分钟前</span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12" style="">
            <button class="btn btn-default btn-block" type="button"
                    style="color: #1A98D5; margin-top: 4px;">
              未完成
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- transaction 2 -->
    <div class="col-xs-12 card-box">
      <div class="card">
        <img src="avatar/avatar_2.jpg" style="height: 96px; width: 96px; float: left;"
             alt="item-1-main-photo" class="img-responsive img-rounded">
        <div class="row" style="padding: 0 10px; height: 100%; float: left; width: calc(100% - 76px);">
          <div class="col-xs-12" style="height: 33%;">
            <span style="font-weight: bold; font-size: 22px;">发布者名称</span>
            <span style="float: right">未完成</span>
          </div>
          <div class="col-xs-12" style="height: 33%; color: #1A98D5; margin-top: 8px;">有谁顺路。。。。。。</div>
          <div class="col-xs-12"
               style="height: 33%; color: #cccccc; margin-top: 9px; padding-right: 0; font-size: 12px;">
            悬赏金额：X元
            <span style="float: right;">一分钟前</span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12" style="">
            <button class="btn btn-default btn-block" type="button"
                    style="color: #1A98D5; margin-top: 4px;">
              未完成
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- transaction 3 -->
    <div class="col-xs-12 card-box">
      <div class="card">
        <img src="avatar/avatar_3.jpg" style="height: 96px; width: 96px; float: left;"
             alt="item-1-main-photo" class="img-responsive img-rounded">
        <div class="row" style="padding: 0 10px; height: 100%; float: left; width: calc(100% - 76px);">
          <div class="col-xs-12" style="height: 33%;">
            <span style="font-weight: bold; font-size: 22px;">发布者名称</span>
            <span style="float: right">未完成</span>
          </div>
          <div class="col-xs-12" style="height: 33%; color: #1A98D5; margin-top: 8px;">有谁顺路。。。。。。</div>
          <div class="col-xs-12"
               style="height: 33%; color: #cccccc; margin-top: 9px; padding-right: 0; font-size: 12px;">
            悬赏金额：X元
            <span style="float: right;">一分钟前</span>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12" style="">
            <button class="btn btn-default btn-block" type="button"
                    style="color: #1A98D5; margin-top: 4px;">
              已完成
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


<header class="col-xs-12" style="position:fixed; height: 90px;">
  <div class="row">
    <div class="col-xs-3" style="padding-left: 25px; padding-top: 20px;">
      <h4 style="margin: 0; color: #1A98D5;"></h4>
    </div>
    <div class="col-xs-6" style="padding-top: 13px;">
      <h2 style="text-align: center; margin: 0; color: #1A98D5;">深大镖局</h2>
    </div>
    <div class="col-xs-3" style="padding-top: 12px;">
      <a href="my_release.html" style="color: #000;">
        <span class="glyphicon glyphicon-plus" style=" float: right; font-size: 15px;">发布</span>
      </a>
    </div>
  </div>
  <div class="row"
       style="margin-top: 8px; padding-top: 8px; text-align: center; border-top: solid 1px #eeeeee; color: #aaaaaa;">
    <a href="order_my_release.php" style="text-decoration: none; color: #aaaaaa;">
      <div class="col-xs-6" style="color: #aaaaaa; border-right: solid 1px #eeeeee;">我发布的</div>
    </a>
    <a href="order_my_task.php" style="text-decoration: none; color: #aaaaaa;">
      <div class="col-xs-6" style="color: #1A98D5;">我的任务</div>
    </a>
  </div>
</header>

<footer class="col-xs-12" style="position:fixed;">
  <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 9px">
    <a href="index.php" style="color: #aaaaaa;">
      <div class="col-xs-4">
        <span class="glyphicon glyphicon-home"></span> <br>
        首页
      </div>
    </a>
    <div class="col-xs-4" style="color: #1A98D5;">
      <span class="glyphicon glyphicon-calendar"></span> <br>
      订单
    </div>
    <a href="me.php" style="color: #aaa;">
      <div class="col-xs-4"><span class="glyphicon glyphicon-user"></span> <br>
        我的
      </div>
    </a>
  </div>
</footer>
</body>
</html>
