<!DOCTYPE html>
<?php
session_start();error_reporting(0);

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap eCommerce Page Template</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body background="../images/demo-1-bg.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">陕西科技大学在线考试管理系统</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="考生信息管理.php">考生信息管理 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="考题信息添加.php">考题信息添加 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="考题信息管理.php">考题信息管理 <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link">你好,<?php  echo $_SESSION['manager'];  ?><span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="后台登陆.php">退出 <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   
	  <table border="1" align="center">
		  <tr>
				<td style="color: white">用户名</td>
				<td style="color: white">密码</td>
				</tr>
<?php
	$serverName = "localhost";
	$connectionInfo = array( "Database"=>"db_online", "UID"=>"sa", "PWD"=>"centos");
	$conn = sqlsrv_connect($serverName,$connectionInfo);
	if($conn!=0)
	{
		$sql = "select online_usr,online_pass from [tb_usr]";
		$stmt = sqlsrv_query($conn,$sql);
		if($stmt!=0)
		{
			
			while($obj = sqlsrv_fetch_object($stmt))
			{
					$username=iconv("GBK","UTF-8",$obj->online_usr);
					$passwd=iconv("GBK","UTF-8",$obj->online_pass);
				?>
				<tr>
				<td style="color: white"><font size="+2"><?php echo $username ?></font></td>
				<td style="color: white"><font size="+2"><?php echo $passwd ?></font></td>
				<form method="post" action="delete_user.php"><td><button  name="delname" type="submit" value="<?php echo $username ?>">删除用户</button></td></form>
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
  </body>
</html>