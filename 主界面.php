<?php session_start();session_destroy(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>考试系统</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body background="images/demo-1-bg.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="主界面.php">陕西科技大学在线考试</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="主界面.php">首页 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="登陆.php">考生登录 <span class="sr-only">(current)</span></a>
            </li> 
			<li class="nav-item active">
              <a class="nav-link" href="注册.php">考生注册 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="查询.php">成绩查询 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="考场.php">进入考场 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="后台/后台登陆.php">后台管理 <span class="sr-only">(current)</span></a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/7.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/4.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/5.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/1.jpg"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4 style="color: white">海量试题</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/2.jpg"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4 style="color: white">最新真题</h4>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-2"><img class="rounded-circle" alt="Free Shipping" src="images/3.png"></div>
            <div class="col-lg-6 col-10 ml-1">
              <h4 style="color: white">试题推荐</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h2 class="text-center" style="color: white">试题分类</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/计算机.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">计算机类</h5>
              <p class="card-text">数据结构，c语言，java语言，计算机网络等计算机相关考试</p>
              <a href="考场.php" class="btn btn-primary">参加考试</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/财会.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">财会类</h5>
              <p class="card-text">初级会计师，中级会计师，注册会计师等会计考试</p>
              <a href="考场.php" class="btn btn-primary">参加考试</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/语言.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">语言类</h5>
              <p class="card-text">英语，日语，法语，韩语，德语，西班牙语等多国语言测试</p>
              <a href="考场.php" class="btn btn-primary">参加考试</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mt-4">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/金融.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">金融类</h5>
              <p class="card-text">基金从业，证券从业，期货从业，银行从业等金融考试</p>
              <a href="考场.php" class="btn btn-primary">参加考试</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/建筑.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">建筑类</h5>
              <p class="card-text">一级建造师，二级建造师，造价工程师，安全工程师，造价员等相关考试</p>
              <a href="考场.php" class="btn btn-primary">参加考试</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/其他.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">其他</h5>
              <p class="card-text">地理，数学，物理，化学，生物，基础科学等基础课程</p>
              <a href="考场.php" class="btn btn-primary">参加考试</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>功能</a> </li>
                <li class="btn-link"> <a>案例</a> </li>
                <li class="btn-link"> <a>新闻</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>关于我们</a> </li>
                <li class="btn-link"> <a>加入我们</a> </li>
                <li class="btn-link"> <a>更新日志</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>客服信息</strong><br>
            QQ：123456789<br>
            陕西科技大学计算机系<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
          <address>
            <strong>陕西科技大学</strong><br>
            <a href="mailto:#">skd.sust@123.com</a>
          </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © MyWebsite. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>