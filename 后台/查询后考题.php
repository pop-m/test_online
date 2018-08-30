<?php
session_start();error_reporting(0);

?>
<!doctype html>
<html>
<head>
<style>
.textarea{
 color:white; /* 设置文本颜色为红色 */
 background:url(../images/demo-1-bg.jpg);
} 
</style>
	  
<meta charset="utf-8">
<title>考题修改/删除</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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


$ktlb=$_REQUEST["kt_lb"];

$ktlb=iconv("UTF-8","GBK",$ktlb);
	
if($conn!=0)
	{	
		$tsql = "select *from [db_online].[dbo].[tb_kt] where kt_lb='$ktlb'";
	    $stmt = sqlsrv_query($conn, $tsql);  
		if($stmt!=0)
		{
			
			while($obj = sqlsrv_fetch_object($stmt))
			{
		?>
	
<table align="center" border="1"  background="../image/demo-1-bg.jpg">
	
			<?php $ktlb=iconv("GBK","UTF-8",$obj->kt_lb) ?>
			<?php $ktid=iconv("GBK","UTF-8",$obj->kt_id) ?>
			<?php $ktfs=iconv("GBK","UTF-8",$obj->kt_fs) ?>
			<?php $answer1=iconv("GBK","UTF-8",$obj->anw1) ?>
			<?php $answer2=iconv("GBK","UTF-8",$obj->anw2) ?>
			<?php $answer3=iconv("GBK","UTF-8",$obj->anw3) ?>
			<?php $answer4=iconv("GBK","UTF-8",$obj->anw4) ?>
			<?php $ktzqdaan=iconv("GBK","UTF-8",$obj->kt_zqdaan) ?>
			<?php $ktnr=iconv("GBK","UTF-8",$obj->kt_nr) ?>
<tr>
        <td  class="textarea" width="112" height="27" align="center"><p><font color="#FFFCFC">考题类别</font></p>
		</td>
		
		<td class="textarea" >
			<form name="form3" method="post" action="ktxx_gl_ok.php">
			<input  type="text" value="<?php echo $ktlb?>" name="kt_lb"></input>
		<p><font color="#FFFCFC">考题编号</font></p><input type="text"  size="8" value="<?php echo $ktid?>" name="kt_id"></input>
		</td> 
</tr>
		
<tr>
        <td class="textarea" align="center"><p><font color="#FFFCFC">考题内容</font></p></td>
        <td><textarea name="kt_nr"  class="textarea" cols="65" rows="8" name="kt_nr" ><?php echo $ktnr ?></textarea></td>
	
		
		<td class="textarea"  width="80s" rowspan="6" align="center" >
			<button type="submit" name="Submit3" value="<?php echo $ktid?>">删除</button>
		
		</td>
		</form>
</tr>		

<tr>
	<td class="textarea" align="center"><p><font color="#FFFCFC">考题选项</font></p></td>
        <td  align="left"><textarea  class="textarea" cols="65" rows="8"  >
		<?php echo $answer1 ?>
			
		<?php echo $answer2 ?>
				
		<?php echo $answer3 ?>
					
		<?php echo $answer4 ?>
			</textarea></td>
</tr><br>
<tr>
		<td class="textarea" align="center"><p><font color="#FFFCFC">考题正确答案</font></p></td>
		
        <td class="textarea"><textarea class="textarea" cols="65" rows="8" name="kt_zqdaan" ><?php echo $ktzqdaan ?></textarea></td>
</tr>

			
</table>

<?php			
			}
		}
	}
	else{
		echo "连接失败";
	}
?>

</body>
</html>