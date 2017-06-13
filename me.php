<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- customize css -->
  <link href="css/zuzu.css" rel="stylesheet">
  <!-- Bootstrap -->
  <title>租租侠</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
<!--  <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
  <script src="js/jquery.min.js"></script>
<!--  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>-->
  <script src="js/bootstrap.min.js"></script>
<!--  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <style>
    .row > .col-xs-3, .row > .col-xs-8 {
      padding-bottom: 10px;
    }
  </style>
</head>
<body>
  <main class="container-fluid" style="background-color: #ffffff;">
    <div class="row">
      <!-- avatar -->
      <div class="col-xs-6" style="padding-top: 32px; margin: 0 25%;">
        <img src="img/zuzu.jpg" alt="logo"
             class="img-responsive img-rounded" style="padding: 20px;">
      </div>
      <!-- user name -->
      <div class="col-xs-12" style="text-align: center;">
        <h3 style="color: #1A98D5; margin: 0 0 40px;">租租侠</h3>
      </div>
      <!-- data -->
      <div class="col-xs-3" style="text-align: right; padding-right: 0">
        <h5 style="color: #1A98D5;">学号：</h5>
      </div>
      <div class="col-xs-8" style="text-align: right;">
        <h5 style="color: #1A98D5;">2015100100</h5>
      </div>
      <div class="col-xs-3" style="text-align: right; padding-right: 0">
        <h5 style="color: #1A98D5;">性别：</h5>
      </div>
      <div class="col-xs-8" style="text-align: right;">
        <h5 style="color: #1A98D5;">男</h5>
      </div>
      <div class="col-xs-3" style="text-align: right; padding-right: 0">
        <h5 style="color: #1A98D5;">手机号：</h5>
      </div>
      <div class="col-xs-8" style="text-align: right;">
        <h5 style="color: #1A98D5;">12345678910</h5>
      </div>
      <div class="col-xs-3" style="text-align: right; padding-right: 0">
        <h5 style="color: #1A98D5;">邮箱：</h5>
      </div>
      <div class="col-xs-8" style="text-align: right;">
        <h5 style="color: #1A98D5;">admin@mrrent.cn</h5>
      </div>
    </div>
  </main>

  <header class="col-xs-12" style="position:fixed;">
    <div class="row">
      <div class="col-xs-3" style=""></div>
      <div class="col-xs-6" style="padding-top: 13px;">
        <h2 style="text-align: center; margin: 0; color: #1A98D5;">租租侠</h2>
      </div>
      <a href="editUserInfo.php">
        <div class="col-xs-3" style="padding: 18px 26px 0; text-align: right;">
          <span class="glyphicon glyphicon-edit" aria-hidden="true" style="font-size: 20px; color: #1A98D5;"></span>
        </div>
      </a>
    </div>
  </header>

  <footer class="col-xs-12" style="position:fixed;">
    <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 14px">
      <a href="index.php" style="text-decoration: none; color: #aaaaaa;"><div class="col-xs-3">首页</div></a>
      <a href="orderlist.php" style="text-decoration: none; color: #aaaaaa;"><div class="col-xs-3">订单</div></a>
      <a href="notice.php" style="text-decoration: none; color: #aaaaaa;"><div class="col-xs-3">通知</div></a>
      <div class="col-xs-3" style="color: #1A98D5;">我</div>
    </div>
  </footer>
</body>
</html>
