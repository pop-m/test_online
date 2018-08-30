<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
	$position="localhost";
	$linkinfo=array("Database"=>"test","UID"=>"sa","PWD"=>"19970714MA");
	$link=sqlsrv_connect($position,$linkinfo);
	if($link!=0)
	{
		$sqlword="insert into studentinfo values(?,?,?,?)";
		$data=array($_POST['stunum'],$_POST['name'],$_POST['age'],$_POST['proj']);
		$size=count($data);
		for($i=0;$i<$size;$i++)
		{
			$data[$i]=iconv('UTF-8','GBK',$data[$i]);
		}
		$stmt=sqlsrv_query($link,$sqlword,$data);
		if($stmt!=0)
		{
			
			echo "<script> alert('注册成功！'); </script>";
		}
		else{
			echo "<script> alert('注册失败！'); </script>";
		}
	}
	else{
		echo "<script> alert('连接失败！'); </script>";
	}
?>
	<form action="ret.php" method="post">
		<input type="submit" value="显示所有信息">
	</form>
<body>
</body>
</html>