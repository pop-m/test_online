<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
$servern="localhost";//数据库服务器地址
$coninfo=array("Database"=>"db_online","UID"=>"sa","PWD"=>"centos");//数据库身份认证
$conn=sqlsrv_connect($servern,$coninfo) or die ("连接失败");
$name=$_POST['delname'];
$name=iconv("UTF-8","GBK",$name);
if($conn){
		 $tsql1 = "DELETE FROM [tb_usr] WHERE (online_usr = '$name')";
		 $tsql2 = "delete from [tb_grade] where (usr_name = '$name')";
		 $stmt = sqlsrv_query( $conn, $tsql1);
		 if( $stmt )
		 {
			 $stmt = sqlsrv_query( $conn, $tsql2);
			 //echo "考生信息删除成功";
			 if($stmt!=0){
				 header("Location:考生信息管理.php");
			 }
			 //跳转到登陆后的首页
		 }
		 else
		 {
			 echo "失败";
			header("Location:考生信息管理.php");
			 
		 }
		sqlsrv_free_stmt( $stmt);
		sqlsrv_close( $conn);
}else{
		 echo "无法建立与数据库的连接";
	     header("Location:后台登陆.php");
	 }
?>