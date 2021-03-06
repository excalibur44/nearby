<?php
include_once "php/isLogin.php";
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

<body style="background-color: #eeeeee">
<main class="container-fluid">
  <div class="row">
    <div class="col-xs-12 card-box">
      <div class="col-xs-12 card" style="margin-bottom: 10px;">
        <!--表单-->
        <div id="form-div" style="padding: 10px 10px 0; display: block;">
          <form id="newReleaseForm" role="form" method="post" action="php/newRelease.php">
            <!-- 物品名称 -->
            <div class="form-group">
              <label for="theme">主题</label>
              <input id="theme" name="theme" type="text" class="form-control" placeholder="请输入您的主题" required>
            </div>
            <!-- 详细信息 -->
            <div class="form-group">
              <label for="detail">详细信息</label>
              <textarea id="detail" name="detail" class="form-control" rows="4" placeholder="描述一下任务的内容"></textarea>
            </div>
            <!-- 任务时限 -->
            <div class="form-group">
              <label>任务时限</label>
              <input type="number" class="form-control" placeholder="截至x小时之前" required style="margin-bottom: 1rem">
            </div>
            <!-- 地址 -->
            <div class="form-group">
              <label for="address">地址</label>
              <input id="address" name="location" placeholder="请输入你现在所在位置" type="text" class="form-control">
            </div>
            <!-- 报酬 -->
            <div class="form-group">
              <label for="price">报酬</label>
              <input id="price" name="price" placeholder="请输入你支付的报酬" type="number" class="form-control">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>


<header class="col-xs-12" style="position:fixed;">
  <div class="row">
    <div class="col-xs-3" style="padding-top: 18px;">
      <a href="javascript:history.back();" style="color:  #000;">
        <span class="glyphicon glyphicon-chevron-left" style="font-size: 15px;"></span>
      </a>
    </div>
    <div class="col-xs-6" style="padding-top: 13px;padding-left: 36px;">
      <h2 style="margin: 0; color: #1A98D5;">发布需求</h2>
    </div>
    <div class="col-xs-3"></div>
  </div>
</header>

<footer class="col-xs-12" style="position:fixed;">
  <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 9px">
    <div class="col-xs-12">
      <button form="newReleaseForm" type="submit" class="btn btn-default btn-block"
              style="border: none; color: #1A98D5;">点击发布
      </button>
    </div>
  </div>
</footer>
</body>
</html>