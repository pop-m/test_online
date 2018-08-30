<?php

$serverName = "localhost";  
$connectionInfo = array("Database"=>"db_online", "UID"=>"sa", "PWD"=>"centos");  
$conn = sqlsrv_connect($serverName, $connectionInfo); 
$ktnr=$_POST["kt_nr"];
$ktnr=iconv("UTF-8","GBK",$ktnr);
$sqlword="delete from tb_kt where kt_nr='$ktnr'";
if ($conn == 0) {  
    echo "Could not connect.\n";  
    die(print_r(sqlsrv_errors(), true));  
}  
	//$ktid=$_REQUEST["ktid"];

else{
	$query=sqlsrv_query($conn,$sqlword);
	if($query){
		echo "<script>alert('考题删除成功！');window.location.href='考题信息管理.php?htgl=考题信息删除';</script>";  
	}
}
	
?>