<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
$servern="localhost";//数据库服务器地址
$coninfo=array("Database"=>"db_online","UID"=>"sa","PWD"=>"centos");//数据库身份认证
$conn=sqlsrv_connect($servern,$coninfo) or die ("连接失败");
$username=$_POST[username];
$usernameG=iconv("UTF-8","GBK",$username);
$pass=$_POST[pass];
$passG=iconv("UTF-8","GBK",$pass);
session_start();

if($conn){
		$tsql = "INSERT INTO tb_usr
        (online_usr, 
         online_pass)
        VALUES 
        (?, ?)";
		 $params = array($usernameG, $passG);
		 $stmt = sqlsrv_query( $conn, $tsql, $params);//准备并执行查询
		 if( $stmt )
		 {
			 //echo "考生信息插入成功";
			 header("Location:登陆后主界面.php");//跳转到登陆后的首页
		 }
		 else
		 {
			 echo "<script> alert('该用户已存在，请重新注册！');</script>";
			 echo "<script> window.location.href='注册.php';</script>";
			  
		 }
		sqlsrv_free_stmt( $stmt);
		sqlsrv_free_stmt( $res);
		sqlsrv_close( $conn);
}else{
		 echo "无法建立与数据库的连接";
	     header("Location:注册.php");
	 }
$_SESSION["name"]=$username;
//echo $_SESSION["savename"];//打印测试
?>