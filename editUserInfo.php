<?php
include "php/config.php";
include "php/isLogin.php";
$sql = "SELECT * FROM user WHERE stuid = :stuid; ";
$array = array(
  'stuid' => $_COOKIE['stuid']
);
$data = sql_select($sql, $array);
$userInfo = $data[0];
//var_dump($data);

$academyList = array('师范学院', '人文学院', '外国语学院', '传播学院', '经济学院', '管理学院', '法学院', '艺术设计学院',
  '数学与统计学院', '物理与能源学院', '化学与环境工程学院学院', '材料学院', '信息工程学院', '计算机与软件学院', '建筑与城市规划学院',
  '土木工程学院', '机电与控制工程学院', '电子科学技术学院', '生命与海洋科学学院', '光电工程学院', '高尔夫学院', '高等研究院', '猪猪学院');

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
<main class="container-fluid">
  <div class="row">

    <div class="col-xs-12 card-box">
      <div class="col-xs-12 card" style="margin-bottom: 10px;">
        <!--表单-->
        <div id="form-div" style="padding: 10px 10px 0; display: block;">
          <h3 style="text-align: center; color: #1A98D5; margin: 10px;">修改个人资料</h3>
          <form id="editUserInfo" role="form" method="post" action="php/editUserInfo.php">
            <!-- 昵称 -->
            <div class="form-group">
              <label for="username">昵称</label>
              <input id="username" type="text" class="form-control" name="username" value="<?php echo $userInfo['username']; ?>" required>
            </div>
            <!-- 姓名 -->
            <div class="form-group">
              <label for="name">姓名</label>
              <input id="name" type="text" class="form-control" name="name" value="<?php echo $userInfo['name']; ?>" required>
            </div>
            <!-- 性别 -->
            <div class="form-group">
              <label for="sex">性别</label>
              <select id="sex" name="sex" class="form-control" required>
                <option value="女" <?php echo ($userInfo['sex']=='女')?"selected":""; ?> >女</option>
                <option value="男" <?php echo ($userInfo['sex']=='男')?"selected":""; ?> >男</option>
              </select>
            </div>
            <!-- 学院 -->
            <div class="form-group">
              <label for="academy">学院</label>
              <select id="academy" name="academy" class="form-control" required>
                <?php
                foreach ($academyList as $academy) {
                  if ($academy == $userInfo['academy'])
                    echo "<option value=\"$academy\" selected>$academy</option>";
                  else
                    echo "<option value=\"$academy\">$academy</option>";
                }
                ?>
              </select>
            </div>
            <!-- 手机 -->
            <div class="form-group">
              <label for="tel">手机</label>
              <input id="tel" type="number" class="form-control" name="phone" value="<?php echo $userInfo['phone']; ?>" required pattern="[0~9]{10}" maxlength="11">
            </div>
            <!-- 微信号 -->
            <div class="form-group">
              <label for="wechat">微信号</label>
              <input id="wechat" type="text" class="form-control" name="wechat" value="<?php echo $userInfo['wechat']; ?>" required >
            </div>
            <!-- 邮箱 -->
            <div class="form-group">
              <label for="email">邮箱</label>
              <input id="email" type="email" class="form-control" name="email" value="<?php echo $userInfo['email']; ?>" >
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
      <h2 style="text-align: center; margin: 0; color: #1A98D5;">深大镖局</h2>
    </div>
    <div class="col-xs-3" style="padding-top: 12px;"></div>
  </div>
</header>

<footer class="col-xs-12" style="position:fixed;">
  <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 14px">
    <div class="col-xs-12" id="submit-button" style="color: #1A98D5; display: block;">
      <button form="editUserInfo" type="submit" style="width: 100%; border: none; background-color: #ffffff;">
        确认修改
      </button>
    </div>
  </div>
</footer>
</body>
</html>
