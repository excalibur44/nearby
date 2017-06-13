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
<body style="background-color: #eeeeee;">
<main class="container-fluid">
  <div class="row">

    <div class="col-xs-12 card-box">
      <div class="col-xs-12 card" style="margin-bottom: 10px;">
        <!--表单-->
        <div id="form-div" style="padding: 10px 10px 0; display: block;">
          <h3 style="text-align: center; color: #1A98D5; margin: 10px;">修改个人资料</h3>
          <form id="editUserInfo" role="form" method="post" action="#" enctype="multipart/form-data">
            <!-- 昵称 -->
            <div class="form-group">
              <label for="name">昵称</label>
              <input id="name" type="text" class="form-control" name="name" value="zuzu" required>
            </div>
            <!-- 学院 -->
            <div class="form-group">
              <label for="college">学院</label>
              <select id="college" name="college" class="form-control" required>
                <!-- TODO: 加上value -->
                <option>师范学院</option>
                <option>人文学院</option>
                <option>外国语学院</option>
                <option>传播学院</option>
                <option>经济学院</option>、
                <option>管理学院</option>
                <option>法学院</option>
                <option>艺术设计学院</option>
                <option>数学与统计学院</option>
                <option>物理与能源学院</option>
                <option>化学与环境工程学院学院</option>
                <option>材料学院</option>
                <option>信息工程学院</option>
                <option>计算机与软件学院</option>
                <option>建筑与城市规划学院</option>
                <option>土木工程学院</option>
                <option>机电与控制工程学院</option>
                <option>电子科学技术学院</option>
                <option>生命与海洋科学学院</option>
                <option>光电工程学院</option>
                <option>高尔夫学院</option>
                <option>高等研究院</option>
              </select>
            </div>
            <!-- 学号 -->
            <div class="form-group">
              <label for="stuid">学号</label>
              <input id="stuid" type="number" class="form-control" name="stuid" value="2015100100" required pattern="[0~9]{10}">
            </div>
            <!-- 手机 -->
            <div class="form-group">
              <label for="tel">手机</label>
              <input id="tel" type="number" class="form-control" name="tel" value="12345678910" required pattern="[0~9]{10}" maxlength="11">
            </div>
            <!-- 微信号 -->
            <div class="form-group">
              <label for="wechat">微信号</label>
              <input id="wechat" type="text" class="form-control" name="wechat" value="zuzu-wechat" required >
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
      <button form="borrowInForm" type="submit" style="width: 100%; border: none; background-color: #ffffff;">
        确认修改
      </button>
    </div>
  </div>
</footer>
</body>
</html>
