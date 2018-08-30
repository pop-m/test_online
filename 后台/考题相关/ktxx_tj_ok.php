<?php   
error_reporting(0);
$serverName = "localhost";  
$connectionInfo = array("Database"=>"db_online", "UID"=>"sa", "PWD"=>"centos");  
$conn = sqlsrv_connect($serverName, $connectionInfo);  
if ($conn === false) {  
    echo "Could not connect.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  
$tsql = "INSERT INTO tb_kt   
        (kt_lb,   
         kt_lx,   
         kt_fs,   
         kt_nr,   
         kt_daan,
		 anw1,
		 anw2,
		 anw3,
		 anw4,
         kt_zqdaan)  
        VALUES   
        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";  
$params = array($_POST[kt_lb], $_POST[ kt_lx], $_POST[kt_fs], $_POST[kt_nr], $_POST[kt_daan],
				$_POST[anw1],$_POST[anw2],$_POST[anw3],$_POST[anw4],$_POST[kt_zqdaan]);  

$size=count($params);
		for($i=0;$i<$size;$i++)
		{
			$params[$i]=iconv('UTF-8','GBK',$params[$i]);
		}


$stmt = sqlsrv_query($conn, $tsql, $params);  
if ($stmt) {  
    echo "<script>alert('考题添加成功！');window.location.href='../考题信息添加.php?htgl=考题信息添加';</script>";  
} else {  
   echo "<script>alert('考题添加失败！');window.location.href='form2.php?htgl=考题信息添加';</script>"; 
    die(print_r(sqlsrv_errors(), true));
}   
sqlsrv_free_stmt($stmt);  
sqlsrv_close($conn);  
?>  

 