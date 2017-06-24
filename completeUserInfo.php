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
<main class="container-fluid">
  <div class="row">

    <div class="col-xs-12 card-box">
      <div class="col-xs-12 card" style="margin-bottom: 10px;">
        <!--表单-->
        <div id="form-div" style="padding: 10px 10px 0; display: block;">
          <h3 style="text-align: center; color: #1A98D5; margin: 10px;">完善个人资料</h3>
          <form id="editUserInfo" role="form" method="post" action="php/signup.php">
            <!-- 昵称 -->
            <div class="form-group">
              <label for="name">姓名</label>
              <input id="name" type="text" class="form-control" name="name" required>
            </div>
            <!-- 性别 -->
            <div class="form-group">
              <label for="sex">性别</label>
              <select id="sex" name="sex" class="form-control" required>
                <option value="女">女</option>
                <option value="男">男</option>
              </select>
            </div>
            <!-- 学院 -->
            <div class="form-group">
              <label for="academy">学院</label>
              <select id="academy" name="academy" class="form-control" required>
<?php
$academyList = array('师范学院', '人文学院', '外国语学院', '传播学院', '经济学院', '管理学院', '法学院', '艺术设计学院',
  '数学与统计学院', '物理与能源学院', '化学与环境工程学院学院', '材料学院', '信息工程学院', '计算机与软件学院', '建筑与城市规划学院',
  '土木工程学院', '机电与控制工程学院', '电子科学技术学院', '生命与海洋科学学院', '光电工程学院', '高尔夫学院', '高等研究院');
foreach ($academyList as $academy) {
  echo         "<option value=\"$academy\">$academy</option>";
}
?>
              </select>
            </div>
            <!-- 学号 -->
            <!--<div class="form-group">
              <label for="stuid">学号</label>
              <input id="stuid" type="number" class="form-control" name="stuid" value="2015100100" required pattern="[0~9]{10}">
            </div>-->
            <!-- 手机 -->
            <div class="form-group">
              <label for="phone">手机</label>
              <input id="phone" type="number" class="form-control" name="phone" required pattern="[0~9]{10}" maxlength="11">
            </div>
            <!-- 微信号 -->
            <div class="form-group">
              <label for="wechat">微信号</label>
              <input id="wechat" type="text" class="form-control" name="wechat" required >
            </div>
            <!-- 邮箱 -->
            <div class="form-group">
              <label for="email">邮箱</label>
              <input id="email" type="email" class="form-control" name="email" >
            </div>
            <div>
              <input type="hidden" name="stuid" value="<?php echo $_POST['stuid']; ?>" required >
              <input type="hidden" name="username" value="<?php echo $_POST['username']; ?>" required >
              <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" required >
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</main>

<header class="col-xs-12" style="position:fixed;">
  <div class="row">
    <a href="me.php">
      <div class="col-xs-3" style="padding-left: 25px; padding-top: 20px;">
        <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="font-size: 20px; color: #1A98D5;"></span>
      </div>
    </a>
    <div class="col-xs-6" style="padding-top: 13px;">
      <h2 style="text-align: center; margin: 0; color: #1A98D5;">租租侠</h2>
    </div>
    <div class="col-xs-3" style="padding-top: 12px;"></div>
  </div>
</header>

<footer class="col-xs-12" style="position:fixed;">
  <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 14px">
    <div class="col-xs-12" id="submit-button" style="color: #1A98D5; display: block;">
      <button form="editUserInfo" type="submit" style="width: 100%; border: none; background-color: #ffffff;">
        完成注册
      </button>
    </div>
  </div>
</footer>
</body>
</html>
