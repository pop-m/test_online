<?php  
session_start(); 
error_reporting(0);
 $user = $_POST["username"];
 $_SESSION['name']=$user;

 $psw = $_POST["password"]; 
 //连接数据库
$serverName = "localhost";
$connectionInfo = array( "Database"=>"db_online", "UID"=>"sa", "PWD"=>"centos");
$conn = sqlsrv_connect($serverName,$connectionInfo); 
 //验证内容是否与数据库的记录吻合。
 $sql = "select * from [tb_usr] where (name='$user') and (online_pass='$psw')";
 //执行上面的sql语句并将结果集赋给result。
 $result = sqlsrv_query($conn,$sql);
 //判断结果集的记录数是否不为0
 while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
 {
	  if (!sqlsrv_num_rows($result))  
         {  
              header('Location:查询结果.php');
         }  
     else  
         {  
           		header('Location:登陆.php');  
	 	 }
 }  
sqlsrv_free_stmt( $result);  
sqlsrv_close( $conn);  
    
?> 