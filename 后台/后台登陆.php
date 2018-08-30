<!doctype html>
<?php session_start();session_destroy(); ?>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
	 <link href="../css/bootstrap-4.0.0.css" rel="stylesheet">
	 <link href="../css/normalize.css" rel="stylesheet">
	<style type="text/css">

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
	<script>
	
	</script>
</head>

<body background="../images/demo-1-bg.jpg">
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">陕西科技大学在线考试后台管理</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
		  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../主界面.php">主界面 <span class="sr-only">(current)</span></a>
            </li>
          </ul>
	<div class="login">
		 
	<h1>系统管理员登陆</h1>
	<form action="后台登陆跳转.php" method="post">
		<input type="text" name="u" placeholder="用户名" required="required" />
		<input type="password" name="p" placeholder="密码" required="required" />
		<button type="submit" class="btn btn-primary btn-block btn-large" >登录</button>
	</form>
	</div>


</body>
</html>