<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		 <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	 <link href="css/normalize.css" rel="stylesheet">
<title>注册</title>
<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
<link href="css/zhuce.css" rel="stylesheet" type="text/css"/>
<script src="js/zhuce.js" language="javascript" type="text/javascript"></script>
	
	
</head>
<body class="bgf4" background="images/demo-1-bg.jpg">
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
	<div>
	
	<div>
		<h1>账号注册</h1>
	<form name="form1" method="post" action="linksql.php" onsubmit="return check()"> 
		<table align="center"> 
			<tr> 
				<td class="nav-link" style="color: white"> 用户名： </td> 
				<td> 
					<input class="nav-link" id="username" type="text" name="username" onblur="check()"> 
					<div id="div1" style="color: azure"> 
					</div> 
				</td> 
			</tr> 
			<tr> 
				<td class="nav-link" style="color: white"> 密码： </td> 
				<td> 
					<input class="nav-link" id="pass" type="password"s name="pass" onblur="check()"> 
					<div id="div2" style="color: azure"> 
					</div> 
				</td> 
			</tr> 
			<tr> 
				<td class="nav-link" style="color: white"> 确认密码： </td> 
				<td> 
					<input class="nav-link" id="passtest" type="password" name="passtest" onblur="check()"> 
					<div id="div3" style="color: azure"> 
					</div> 
				</td> 
			</tr> 

			<tr align="center"> 
			<td align="center"> 
				<button type="reset" class="btn btn-primary btn-block btn-large">重置</button><td>
				<button type="submit" class="btn btn-primary btn-block btn-large">注册</button>
			</td> 
			</tr> 
		</table>  
	</form> 
	</div>
</body>
</html>
