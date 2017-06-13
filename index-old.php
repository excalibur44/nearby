<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Bootstrap -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <title>租租侠</title>
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
<!--      transaction 1-->
      <div class="col-xs-12 transaction-box">
        <div class="transaction">
          <div class="col-xs-3" style="height: 100%; padding: 0;">
            <img src="img/Pikachu.jpg" style="vertical-align: middle; max-height: 116px;"
                 alt="item-1-main-photo" class="img-responsive img-rounded">
          </div>
          <div class="col-xs-9" style="padding-left: 0; padding-right: 10px; height: 100%;">
            <div class="col-xs-12" style="height: 33%; font-weight: bold; font-size: 20px;">物品名称</div>
            <div class="col-xs-12" style="height: 33%; color: #1A98D5; margin-top: 4px;">￥12 元&nbsp;/&nbsp;天</div>
            <div class="col-xs-12" style="height: 33%; color: #cccccc; margin-top: 4px; padding-right: 0; font-size: 14px;">
              押金：50
              <span style="float: right;">出租者：test user</span>
            </div>
          </div>
        </div>
      </div>
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

  <header class="col-xs-12" style="position:fixed;">
    <div class="row">
      <div class="col-xs-3" style="padding-left: 25px; padding-top: 20px;">
        <h4 style="margin: 0; color: #1A98D5;">后台</h4>
      </div>
      <div class="col-xs-6" style="padding-top: 13px;">
        <h2 style="text-align: center; margin: 0; color: #1A98D5;">租租侠</h2>
      </div>
      <div class="col-xs-3" style="padding-top: 12px;">
<!--        <h3 style="text-align: right; margin: 0; color: #1A98D5;"></h3>-->
        <img src="img/plus-min.png" width="32" height="32" style="float: right;">
      </div>
    </div>
  </header>

  <footer class="col-xs-12" style="position:fixed;">
    <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 14px">
      <div class="col-xs-4" style="color: #1A98D5;">首页</div>
      <div class="col-xs-4">订单</div>
      <div class="col-xs-4">我</div>
    </div>
  </footer>
</body>
</html>
