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
              <a class="nav-link">你好,<?php  echo $_SESSION["manager"];  ?><span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="后台登陆.php">退出 <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   
   <?php
$serverName = "localhost";  
$connectionInfo = array("Database"=>"db_online", "UID"=>"sa", "PWD"=>"centos");  
$conn = sqlsrv_connect($serverName, $connectionInfo);  
if ($conn === false) {  
    echo "Could not connect.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  
	?>
	
	
	
	<table align="center" border="1"  bgcolor="#DDDDDD">
		
	<tr>
		<td class="nav-link" align="center" >考题类别</td>
		<form name="form1" method="post" action="查询后考题.php">
			<td class="nav-link">
				
				
				<select idf="kt_lb" name="kt_lb" >
 					<option value ="计算机类">计算机类</option>
					<option value ="财会类">财会类</option>
  					<option value ="语言类">语言类</option>
  					<option value ="金融类">金融类</option>
  					<option value ="建筑类">建筑类</option>
  					<option value ="理科类">理科类</option>
				</select>
				
			<input type="submit" value="查询">
		</form>

			</td>
	</tr>
		
</table>
   
   
  </body>
</html>