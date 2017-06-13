<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- customize css -->
  <link href="css/zuzu.css" rel="stylesheet">
  <!-- Hammer.js -->
  <script src="js/hammer.min.js"></script>
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
  <main class="container-fluid">
    <div class="row">
      <!-- card 1 -->
      <div class="col-xs-12 card-box">
        <div class="col-xs-12 card">
          <!-- 轮播 -->
          <div class="col-xs-10" style="margin: 20px 8.33333333%; padding: 0;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators" style="margin-bottom: -10px;">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/Pikachu.jpg" alt="photo1">
                </div>

                <div class="item">
                  <img src="img/zuzu.jpg" alt="photo2">
                </div>

                <div class="item">
                  <img src="img/android-n-preview-logo.jpg" alt="photo3">
                </div>
              </div>

              <!-- Left and right controls -->
              <!--<a class="left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>-->
            </div>
            <script>
                $('.carousel').carousel({
                    interval:4000
                });

                var hammer = new Hammer(document.getElementById('myCarousel'));
                hammer.on('swipeleft', function(){
                    $('#myCarousel').carousel('next');
                });
                hammer.on('swiperight', function(){
                    $('#myCarousel').carousel('prev');
                });
            </script>
          </div>
          <!-- 详细内容 -->
          <div class="col-xs-12" style="padding: 0 20px;">
            <p>
              <span style="font-weight: bold; font-size: 22px;">台灯</span>
              <span style="color: #1A98D5;">￥12&nbsp;元&nbsp;/&nbsp;天</span>
            </p>
            <p style="color: #cccccc; padding-right: 0; font-size: 12px;">
              押金：50
              <span style="float: right;">出租者：test user</span>
            </p>
            <hr>
            <p style="font-size: 14px; line-height: 1.7;">
              <span style="font-weight: bold;">物品详情：</span><br>
              我喜欢咖啡，喜欢在漂亮的地方工作，微有杂音的环境会让我更容易精神集中，所以不用上班的日子都游荡在各处咖啡馆。
              理想的工作方式是独立又自由：在自己的能力和作品气质上独立，在工作地点和合作方式上自由。
            </p>
          </div>
        </div>
      </div>

      <!-- comment box -->
      <div class="col-xs-12 card-box">
        <div class="col-xs-12 card">
          <form>
            <div class="form-group" style="padding: 6px;">
              <label for="add-comment" style="margin-bottom: 10px;">为物品添加上你的评价：</label>
              <textarea id="add-comment" class="form-control" rows="3"></textarea>
              <button class="btn btn-primary" type="submit"
                      style="float: right; margin-top: 10px; border-color: #ffffff; background-color: #1A98D5;">
                提交评价
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- card 2 -->
      <div class="col-xs-12 card-box" style="margin-bottom: 10px;">
        <div class="col-xs-12 card">
          <h4 style="margin: 10px;">评价&nbsp;<span class="badge">3</span></h4>
          <hr style="margin: 0 0 10px;">

          <div class="col-xs-12">
            <p style="font-weight: 600; color: #1A98D5;">评价者：</p>
            <p>只要抬头望着星空，世界就会变得好大好大！</p>
            <p style="color: #aaaaaa;">2017年6月1日 07:00</p>
            <hr style="margin: 10px 0;">
          </div>

          <div class="col-xs-12">
            <p style="font-weight: 600; color: #1A98D5;">评价者：</p>
            <p>在放手之前，想要抓多紧，就抓多紧</p>
            <p style="color: #aaaaaa;">2017年6月1日 07:00</p>
            <hr style="margin: 10px 0;">
          </div>

          <div class="col-xs-12">
            <p style="font-weight: 600; color: #1A98D5;">评价者：</p>
            <p>虽然有些事情,从一开始就意味着结束,从一开始就知道没有结果,那是不是就不让它开始呢?如果害怕失去就放弃拥有的权利,那么人生好像也就失去了意义……</p>
            <p style="color: #aaaaaa;">2017年6月1日 07:00</p>
            <hr style="margin: 10px 0;">
          </div>

        </div>
      </div>

      <div style="margin-top: 10px;"></div>
    </div>
  </main>

  <header class="col-xs-12" style="position:fixed;">
    <div class="row">
      <a href="index.php">
        <div class="col-xs-3" style="padding-left: 25px; padding-top: 20px;">
          <span class="glyphicon glyphicon-menu-left" aria-hidden="true" style="font-size: 20px; color: #1A98D5;"></span>
        </div>
      </a>
      <div class="col-xs-6" style="padding-top: 13px;">
        <h2 style="text-align: center; margin: 0; color: #1A98D5;">租租侠</h2>
      </div>
      <div class="col-xs-3" style=""></div>
    </div>
  </header>

  <footer class="col-xs-12" style="position:fixed;">
    <a href="borrowInForm.php">
      <div class="row" style="text-align: center; color: #aaaaaa; padding-top: 14px">
          <div class="col-xs-12" id="submit-button" style="color: #1A98D5; display: block;">
            <button style="width: 100%; border: none; background-color: #ffffff;">
              我想租这个
            </button>
          </div>
      </div>
    </a>
  </footer>
</body>
</html>
