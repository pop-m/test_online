<!DOCTYPE html>
<?php
header("content-type:text/html; charset=utf-8");
session_start();error_reporting(0);

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap eCommerce Page Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet">
  </head>
  <body background="images/demo-1-bg.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="登陆后主界面.php">陕西科技大学在线考试</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="登陆后主界面.php">首页 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="查询结果.php">成绩查询 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="登陆后考场.php">进入考场 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="查询结果.php">你好,<?php echo $_SESSION["name"]; ?> <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="主界面.php">退出  <span class="sr-only">(current)</span></a>
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
	  <table align="center" border="0" cellpadding="10" bordercolor="black">
   
	<tr>
		<th style="color: white"><font size="+5" >用户名</font></th>
		<th style="color: white"><font size="+5">考试科目</font></th>
		<th style="color: white"><font size="+5">成绩</font></th>
		
	</tr>
	
<?php
	
	$serverName = "localhost";
	$name=$_SESSION["name"];
	$nameG=iconv("UTF-8","GBK",$name);
	$sql = "select kt_lx,grade from [tb_grade] where usr_name='$nameG'";
		
	$connectionInfo = array( "Database"=>"db_online", "UID"=>"sa", "PWD"=>"centos");
	$conn = sqlsrv_connect($serverName,$connectionInfo);
	if($conn!=0)
	{
		$stmt = sqlsrv_query($conn,$sql);
		if($stmt!=0)
		{
			
			while($obj = sqlsrv_fetch_object($stmt))
			{
				?>
				<tr>
				<td style="color: white"><font size="+4"><?php echo $name ?></font></td>
				<?php $ktlx=iconv("GBK","UTF-8",$obj->kt_lx);?>
				<td style="color: white"><font size="+4"><?php echo $ktlx ?></font></td>
				<td style="color: white"><font size="+4"><?php echo $obj->grade ?></font></td>
				</tr>
<?php			
			}
		}
	}
	else{
		echo "连接失败";
	}
?>

	</table>
</div>
</body>