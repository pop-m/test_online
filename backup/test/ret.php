<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>my first php site</title>
</head>
<body>
<table border="1" align="center">
	<tr>
		<th>学号</th>
		<th>姓名</th>
		<th>年龄</th>
		<th>专业</th>
	</tr>
	
<?php
	$serverName = "localhost";
	$sql = "select * from studentinfo";
	$connectionInfo = array( "Database"=>"test", "UID"=>"sa", "PWD"=>"19970714MA");
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
				<td><?php echo $obj->stunum ?></td>
				<td><?php echo $obj->name ?></td>
				<td><?php echo $obj->age ?></td>
				<td><?php echo $obj->proj ?></td>
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