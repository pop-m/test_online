<!doctype html>
<?php
	session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
		$answer=array($_POST['question1Answer'],$_POST['question2Answer'],$_POST['question3Answer'],$_POST['question4Answer']
					  ,$_POST['question5Answer']);
		

		$rightAnswer1=array('0','0','0','0','0');	
		for($i=0;$i<5;$i++){
			$rightAnswer1[$i]=$_SESSION['rightAnswer'][$i];
		}
		$grade=0;
		//计分过程
		for($i=0;$i<5;$i++){
			if($answer[$i] == $_SESSION['rightAnswer'][$i]){
					$grade=20+$grade;
				}
		}
	
		$examTypeBig=$_SESSION['kt_lb'];
		$examTypeLittle=$_SESSION['kt_lx'];
	
		$examTypeBig=iconv('UTF-8','GBK',$examTypeBig);
		$examTypeLittle=iconv('UTF-8','GBK',$examTypeLittle);
		
		$position="localhost";
		$linkInfo=array("Database"=>"db_online","UID"=>"sa","PWD"=>"19970714MA");
	
		///写入数据
		$sqlWordWrite="insert into tb_grade values (?,?,?,?)";
		$data=array($_SESSION['name'],$grade,$_SESSION['kt_lx'],$_SESSION['kt_lb']);
		for($i=0;$i<4;$i++){
			$data[$i] = iconv('UTF-8','GBK',$data[$i]);
		}
		$linkStatus=sqlsrv_connect($position,$linkInfo);
		$i=0;
		if($linkStatus!=0){
			$result=sqlsrv_query($linkStatus,$sqlWordWrite,$data);
			if($result!=0){
				echo "<script> window.alert('答题完成，点击确定将会返回首页！'); </script>";
				echo "<script> window.location.href='xieyi.php'; </script>";
			} 	
			else{
				echo "<script> alert('系统出错，请通知管理员！'); </script>";
			}
		}
		else{
			echo "数据库连接有问题，请通知管理员检查";
		}
		sqlsrv_close($linkStatus);  
	?>
</body>
</html>