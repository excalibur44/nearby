<?php
include_once "php/config.php";
include_once "php/doNotCache.php";
$sql = 'SELECT taskid, avatar, detail, username, price, time
        FROM task, user WHERE user.stuid = task.stuid ORDER BY task.time DESC ;';
$data = sql_select($sql);
// var_dump($data[0]);
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
<body>
<main class="container-fluid">
  <div class="row">
    <div class="col-xs-3" style="padding-top: 14px; text-align: center;">
      <p style="font-weight: bold; font-size: 18px;">搜索: </p>
    </div>

    <div class="col-xs-9" style="padding-top: 10px; padding-left: 0;">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="请输入关键词">
        <span class="input-group-addon glyphicon glyphicon-search"></span>
      </div>
    </div>
  </div>

  <!-- 任务列表-->
  <div class="row">
<?php
  for ($i = 0; $i < count($data); $i++)
  {
    $avatar   = $data[$i]['avatar'];
    $username = $data[$i]['username'];
    $detail   = $data[$i]['detail'];
    $time     = $data[$i]['time'];
    $price    = $data[$i]['price'];
    $taskid   = $data[$i]['taskid'];

    echo "
    <!-- transaction $i -->
    <div class=\"col-xs-12 card-box\">
      <div class=\"card\">
        <img src=\"avatar/$avatar\" style=\"height: 96px; width: 96px; float: left;\"
             alt=\"item-1-main-photo\" class=\"img-responsive img-rounded\">
        <div class=\"row\" style=\"padding: 0 10px; height: 100%; float: left; width: calc(100% - 76px);\">
          <div class=\"col-xs-12\" style=\"height: 33%;\">
            <span style=\"font-weight: bold; font-size: 22px;\">$username</span>
            <span style=\"float: right\">未完成</span>
          </div>
          <div class=\"col-xs-12\" style=\"height: 33%; color: #1A98D5; margin-top: 8px;\">$detail</div>
          <div class=\"col-xs-12\"
               style=\"height: 33%; color: #cccccc; margin-top: 9px; padding-right: 0; font-size: 12px;\">
            悬赏金额：$price 元
            <span style=\"float: right;\">$time</span>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-xs-12\" style=\"\">
            <!-- TODO: 插入 task id 跳转至抢镖界面 -->
            <button class=\"btn btn-default btn-block\" type=\"button\"
                    style=\"color: #1A98D5; margin-top: 4px;\">
              抢镖
            </button>
          </div>
        </div>
      </div>
    </div>";
  }
?>
  </div>
</main>

<header class="col-xs-12" style="position:fixed;">
  <div class="row">
    <div class="col-xs-3" style="padding-left: 25px; padding-top: 20px;">
      <h4 style="margin: 0;">
        <?php
        if ( !isset($_COOKIE['token']) )
          echo "
            <a href=\"login.html\" style=\"color: #1A98D5;\">
              登录
            </a>";
        ?>
      </h4>
    </div>
    <div class="col-xs-6" style="padding-top: 13px;">
      <h2 style="text-align: center; margin: 0; color: #1A98D5;">深大镖局</h2>
    </div>
    <div class="col-xs-3" style="padding-top: 20px;">
      <a href="newRelease.html" style="color:#444444; font-size: 15px;">
        <span class="glyphicon glyphicon-plus" style="float: right;">发布</span>
      </a>
    </div>
  </div>
</header>

<footer class="col-xs-12" style="position:fixed;">
  <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 9px">
    <div class="col-xs-4" style="color: #1A98D5;">
      <span class="glyphicon glyphicon-home"></span> <br>
      首页
    </div>
    <a href="order_my_release.php" style="color: #aaaaaa;">
      <div class="col-xs-4">
        <span class="glyphicon glyphicon-calendar"></span> <br>
        订单
      </div>
    </a>
    <a href="me.php" style="color: #aaa;">
      <div class="col-xs-4"><span class="glyphicon glyphicon-user"></span> <br>
        我的
      </div>
    </a>
  </div>
</footer>

</body>
</html>
