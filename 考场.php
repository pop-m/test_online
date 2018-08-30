<?php
session_start(); 
if ( !$_SESSION['name'] ) {
    header("Location: 登陆.php");exit;
}
?>
<style>
	  .login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: 0 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
		</style>
<!DOCTYPE html>
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
	<div class="login">
	<h1>选择科目</h1>
	<form  method="post" >
		<p style="font-size:20px"><font color="#FFFFFF"> 请选择您想参加的考试类型
   <select class="btn btn-primary btn-block btn-large" name="kt_lb" id="xueyuan" onchange="valueChange()">
	  <option>-请选择-</option>
      <option value="计算机类">计算机类</option>
      <option value="财会类">财会类</option>
      <option value="语言类">语言类</option>
      <option value="建筑类">建筑类</option>
      <option value="金融类">金融类</option>
      <option value="理科类">理科类</option>
   </select>
   请选择您选择的具体科目
   <select class="btn btn-primary btn-block btn-large" id="zhuanye" name="kt_lx">
   </select>
			<button type="submit" class="btn  btn-block btn-large">确定</button>
	</form>
	</div>
	<script type="text/javascript">
       function valueChange()
	   {
		   var obj=document.getElementById("xueyuan");
		   var index = obj.selectedIndex; 
           var text = obj.options[index].text; 
		   var sec = document.getElementById('zhuanye'); 
		   var zhuanye1=new Array("C语言","C++语言","JAVA语言","数据结构");
		   var zhuanye2=new Array("初级会计师","中级会计师","高级会计师","注册会计师");
		   var zhuanye3=new Array("英语","日语","德语","韩语");
		   var zhuanye4=new Array("材料建筑师","安全建筑师","测量建筑师","造价员");
		   var zhuanye5=new Array("证券","基金","期货","银行");
		   var zhuanye6=new Array("数学","信息科学","物理","化学");
		    if(text=="计算机类")
		   {
			   for(var i=0;i<zhuanye1.length;i++)
			   {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye1[i];
				   sec.options[i].value=zhuanye1[i];
			   }
		   }
		   else
		   {
				 if(text=="财会类")
		  		 {
			   		for(var i=0;i<zhuanye2.length;i++)
			  		 {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye2[i];
					sec.options[i].value=zhuanye2[i];
			  		 }
		  		 }
				 else
				 {
					  if(text=="语言类")
		 			  {
			  			 for(var i=0;i<zhuanye3.length;i++)
			  				 {
				 		 	 sec.options[i]=new Option();
				 		  	sec.options[i].text=zhuanye3[i];
							sec.options[i].value=zhuanye3[i];
			  			 	}
		  				}
						else
						{
							 if(text=="建筑类")
		   {
			   for(var i=0;i<zhuanye4.length;i++)
			   {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye4[i];
				   sec.options[i].value=zhuanye4[i];
			   }
		   }
		   else{
			    if(text=="金融类")
		   {
			   for(var i=0;i<zhuanye5.length;i++)
			   {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye5[i];
				   sec.options[i].value=zhuanye5[i];
			   }
		   }
		   else{
			    if(text=="理科类")
		   {
			   for(var i=0;i<zhuanye6.length;i++)
			   {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye6[i];
				   sec.options[i].value=zhuanye6[i];
			   }
		   }
		  
			   }
			   }
			   }
							}
					}
			   }
		 
		  </script>
  
</body>