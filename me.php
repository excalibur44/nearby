<?php
include_once "php/config.php";
include_once "php/isLogin.php";
include_once "php/doNotCache.php";

$sql = "SELECT * FROM user WHERE stuid = :stuid;";
$array = array(
  'stuid' => $_COOKIE['stuid']
);
$data = sql_select($sql, $array);
$data = $data[0];
//var_dump($data);
//$data['email'] = NULL;
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
<main class="container-fluid" style="background-color: #ffffff">
  <div class="row">
    <!-- avatar -->
    <div class="col-xs-6" style="padding-top: 32px; margin: 0 25%;">
      <img src="avatar/<?php echo $data['avatar']; ?>" alt="logo"
           class="img-responsive img-rounded" style="padding: 20px; margin: 0 auto;">
    </div>
    <!-- user name -->
    <div class="col-xs-12" style="text-align: center;">
      <h3 style="color: #1A98D5; margin: 0 0 40px;"><?php echo $data['username']; ?></h3>
    </div>
    <!-- data -->
    <div class="col-xs-3" style="text-align: right; padding-right: 0">
      <h5 style="color: #1A98D5;">姓名：</h5>
    </div>
    <div class="col-xs-8" style="text-align: right;">
      <h5 style="color: #1A98D5;"><?php echo $data['name']; ?></h5>
    </div>
    <!-- stuid -->
    <div class="col-xs-3" style="text-align: right; padding-right: 0">
      <h5 style="color: #1A98D5;">学号：</h5>
    </div>
    <div class="col-xs-8" style="text-align: right;">
      <h5 style="color: #1A98D5;"><?php echo $data['stuid']; ?></h5>
    </div>
    <!-- academy -->
    <div class="col-xs-3" style="text-align: right; padding-right: 0">
      <h5 style="color: #1A98D5;">学院：</h5>
    </div>
    <div class="col-xs-8" style="text-align: right;">
      <h5 style="color: #1A98D5;"><?php echo $data['academy']; ?></h5>
    </div>
    <!-- sex -->
    <div class="col-xs-3" style="text-align: right; padding-right: 0">
      <h5 style="color: #1A98D5;">性别：</h5>
    </div>
    <div class="col-xs-8" style="text-align: right;">
      <h5 style="color: #1A98D5;"><?php echo ($data['sex'])?'男':'女'; ?></h5>
    </div>
    <!-- wechat -->
    <div class="col-xs-3" style="text-align: right; padding-right: 0">
      <h5 style="color: #1A98D5;">微信号：</h5>
    </div>
    <div class="col-xs-8" style="text-align: right;">
      <h5 style="color: #1A98D5;"><?php echo $data['wechat']; ?></h5>
    </div>

    <div class="col-xs-3" style="text-align: right; padding-right: 0">
      <h5 style="color: #1A98D5;">手机号：</h5>
    </div>
    <div class="col-xs-8" style="text-align: right;">
      <h5 style="color: #1A98D5;"><?php echo $data['phone']; ?></h5>
    </div>

    <div class="col-xs-3" style="text-align: right; padding-right: 0">
      <h5 style="color: #1A98D5;">邮箱：</h5>
    </div>
    <div class="col-xs-8" style="text-align: right;">
      <h5 style="color: #1A98D5;"><?php echo ($data['email'])?$data['email']:"无"; ?></h5>
    </div>
  </div>
</main>

<header class="col-xs-12" style="position:fixed;">
  <div class="row">
    <div class="col-xs-3" style=""></div>
    <div class="col-xs-6" style="padding-top: 13px;">
      <h2 style="text-align: center; margin: 0; color: #1A98D5;">深大镖局</h2>
    </div>
    <a href="editUserInfo.php">
      <div class="col-xs-3" style="padding: 18px 26px 0; text-align: right;">
        <span class="glyphicon glyphicon-edit" aria-hidden="true" style="font-size: 20px; color: #1A98D5;"></span>
      </div>
    </a>
  </div>
</header>

<footer class="col-xs-12" style="position:fixed;">
  <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 9px">
    <a href="index.php" style="color: #aaa;">
      <div class="col-xs-4"><span class="glyphicon glyphicon-home"></span> <br>
        首页
      </div>
    </a>
    <a href="order_my_release.html" style="color: #aaaaaa;">
      <div class="col-xs-4"><span class="glyphicon glyphicon-calendar"></span> <br>
        订单
      </div>
    </a>
    <a href="me.php" style="color: #aaa;">
      <div class="col-xs-4" style="color: #1A98D5;"><span class="glyphicon glyphicon-user"></span> <br>
        我的
      </div>
    </a>
  </div>
</footer>

</body>
</html>
