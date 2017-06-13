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
</head>
<body>
  <main class="container-fluid" style="padding-top: 90px;">
    <div class="row">
      <!--      transaction 1-->
      <a href="item.php">
        <div class="col-xs-12 transaction-box">
          <div class="transaction">
            <img src="img/Pikachu.jpg" style="height: 96px; width: 96px; float: left;"
                 alt="item-1-main-photo" class="img-responsive img-rounded">
            <div class="row" style="padding: 0 10px; height: 100%; float: left; width: calc(100% - 76px);">
              <div class="col-xs-12" style="height: 33%; font-weight: bold; font-size: 22px;">物品名称</div>
              <div class="col-xs-12" style="height: 33%; color: #1A98D5; margin-top: 8px;">￥12&nbsp;元&nbsp;/&nbsp;天</div>
              <div class="col-xs-12" style="height: 33%; color: #cccccc; margin-top: 2px; padding-right: 0; font-size: 12px;">
                押金：50
                <span style="float: right;">出租者：test user</span>
              </div>
            </div>
          </div>
        </div>
      </a>

      <!--      transaction 2-->
      <div class="col-xs-12 transaction-box">
        <div class="transaction"></div>
      </div>

      <div class="col-xs-12 transaction-box">
        <div class="transaction"></div>
      </div>

      <div class="col-xs-12 transaction-box">
        <div class="transaction"></div>
      </div>
    </div>

    <div class="row" style="margin-top: 10px">
      <div class="col-xs-12">
        <p style="float: left;">&#x2190;&nbsp;previous</p>
        <p style="float: right;">next&nbsp;&#x2192;</p>
      </div>
      <p>&nbsp;</p>
      <p style="text-align: center; color: #aaaaaa;">power by zuzu</p>
    </div>
  </main>

  <header class="col-xs-12" style="position:fixed; height: 90px;">
    <div class="row">
      <div class="col-xs-3" style=""></div>
      <div class="col-xs-6" style="padding-top: 13px;">
        <h2 style="text-align: center; margin: 0; color: #1A98D5;">租租侠</h2>
      </div>
      <div class="col-xs-3" style=""></div>
    </div>
    <div class="row" style="margin-top: 8px; padding-top: 8px; text-align: center; border-top: solid 1px #eeeeee;">
      <div class="col-xs-6" style="color: #1A98D5; border-right: solid 1px #eeeeee;">我出租的</div>
      <div class="col-xs-6" style="color: #aaaaaa;">我借入的</div>
    </div>
  </header>

  <footer class="col-xs-12" style="position:fixed;">
    <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 14px">
      <a href="index.php" style="text-decoration: none; color: #aaaaaa;"><div class="col-xs-3">首页</div></a>
      <div class="col-xs-3" style="color: #1A98D5;">订单</div>
      <a href="notice.php" style="text-decoration: none; color: #aaaaaa;"><div class="col-xs-3">通知</div></a>
      <a href="me.php" style="text-decoration: none; color: #aaaaaa;"><div class="col-xs-3">我</div></a>
    </div>
  </footer>
</body>
</html>
