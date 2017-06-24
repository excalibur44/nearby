<?php
$message    = (isset($_GET['message']))?$_GET['message']:"操作失败";
$buttonText = (isset($_GET['buttonText']))?$_GET['buttonText']:"回到首页";
$buttonURL  = (isset($_GET['buttonURL']))?$_GET['buttonURL']:"/";
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <title>深大镖局</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--  <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
  <script src="js/jquery.min.js"></script>
  <!--  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>-->
  <script src="js/bootstrap.min.js"></script>
  <!--  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <style>
    body{
      margin:0;
      background-color:#F1F1F1;
    }
    @font-face {
      font-family: Georgia, "Times New Roman",
      "Microsoft YaHei", "微软雅黑",
      STXihei, "华文细黑",
      serif;
    }
    footer {
      border-top: 1px solid #E5E5E5;
      padding:12px;
      position:absolute;
      bottom:0;
      width:100%;
      height:44px;
    }
  </style>
</head>

<body>
  <div class="container" style="margin:0 25px; padding:15px 22px 44px;">
    <div class="row">
      <div class="col-xs-12" style="margin-top:40px;">
        <img src="img/failed.png" class="img-responsive" alt="success!" style="width:120px; margin:0 auto;">
      </div>

      <div class="col-xs-12" style="padding:0; margin:20px auto;">
        <h3 style="text-align:center; margin:10px;"><?php echo $message; ?></h3>
        <div style="width:100%; margin:calc(0%); padding-top:60px;">
          <a type="button" class="btn btn-default btn-block" href="<?php echo $buttonURL; ?>" style="margin-top:10px;">
            <?php echo $buttonText; ?>
          </a>
        </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <p style="font-size:14px; text-align:center; color:#999999;">mrrent.cn</p>
      </div>
    </div>
  </footer>
</body>
</html>
