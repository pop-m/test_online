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
	  
	  <script type="text/javascript">
       function valueChange()
	   {
		   var obj=document.getElementById("xueyuan");
		   var index = obj.selectedIndex; 
           var text = obj.options[index].text; 
		   var sec = document.getElementById('zhuanye'); 
		   var zhuanye0=new Array("-请选择-");
		   var zhuanye1=new Array("C语言","C++语言","JAVA语言","数据结构");
		   var zhuanye2=new Array("初级会计师","中级会计师","高级会计师","注册会计师");
		   var zhuanye3=new Array("英语","日语","德语","韩语");
		   var zhuanye4=new Array("材料建筑师","安全建筑师","测量建筑师","造价员");
		   var zhuanye5=new Array("证券","基金","期货","银行");
		   var zhuanye6=new Array("数学","信息科学","物理","化学");
		   if(text=="-请选择-")
			   {
				   
				   sec.options[i]=new Option();
				   document.getElementById("zhuanye").length=0;
				    
			   }
		    else if(text=="计算机类")
		   {
			   for(var i=0;i<zhuanye1.length;i++)
			   {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye1[i];
				   sec.options[i].value=zhuanye1[i];
			   }
		   }
		   else
		   {
				 if(text=="财会类")
		  		 {
			   		for(var i=0;i<zhuanye2.length;i++)
			  		 {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye2[i];
				 sec.options[i].value=zhuanye2[i];
			  		 }
		  		 }
				 else
				 {
					  if(text=="语言类")
		 			  {
			  			 for(var i=0;i<zhuanye3.length;i++)
			  				 {
				 		 	 sec.options[i]=new Option();
				 		  	sec.options[i].text=zhuanye3[i];
								 sec.options[i].value=zhuanye3[i];
			  			 	}
		  				}
						else
						{
							 if(text=="建筑类")
		   {
			   for(var i=0;i<zhuanye4.length;i++)
			   {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye4[i];
				   sec.options[i].value=zhuanye4[i];
			   }
		   }
		   else{
			    if(text=="金融类")
		   {
			   for(var i=0;i<zhuanye5.length;i++)
			   {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye5[i];
				   sec.options[i].value=zhuanye5[i];
			   }
		   }
		   else{
			    if(text=="理科类")
		   {
			   for(var i=0;i<zhuanye6.length;i++)
			   {
				   sec.options[i]=new Option();
				   sec.options[i].text=zhuanye6[i];
				   sec.options[i].value=zhuanye6[i];
			   }
		   }
		  
			   }
			   }
			   }
							}
					}
			   }
		 
		  </script>
	  
<style>
.textarea{
 color:white; /* 设置文本颜色为红色 */
 background:url(../images/demo-1-bg.jpg);
} 
</style>
	  
	  
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
   
	  
	  
	  
	  <form name="form2" method="post" action="考题相关/ktxx_tj_ok.php">
		<table border="2"  background="../images/demo-1-bg.jpg" align="center">
    <tr>
        <td align="center"><p><font color="#FFFFFF">考题类别</font></p>
		</td>
		<td>
<select class="btn btn-primary btn-block btn-large" id="xueyuan" onchange="valueChange()" name="kt_lb">
      <option >-请选择-</option>
	  <option value="计算机类">计算机类</option>
      <option value="财会类">财会类</option>
      <option value="语言类">语言类</option>
      <option value="建筑类">建筑类</option>
      <option value="金融类">金融类</option>
      <option value="理科类">理科类</option>
   </select>
			
	<p><font color="#FFFFFF">考题类型</font></p>
<select class="btn btn-primary btn-block btn-large" id="zhuanye" name="kt_lx">
</select>
		</td>
    </tr><br>
    <tr>
        <td align="center"><p><font color="#FFFFFF">添加考试内容</font></p>
		
		</td>
        <td><textarea class="textarea" cols="67" rows="8" name="kt_nr"></textarea>
		</td>
	</tr>
	<tr>
		<td align="center"><p><font color="#FFFFFF">选项A</font></p></td>
        <td><textarea  class="textarea" cols="67" rows="2" name="anw1"></textarea></td>
	</tr>
	<tr>
		<td align="center"><p><font color="#FFFFFF">选项B</font></p></td>
        <td><textarea class="textarea" cols="67" rows="2" name="anw2"></textarea></td>
	</tr>
	<tr>
		<td align="center"><p><font color="#FFFFFF">选项C</font></p></td>
        <td><textarea class="textarea" cols="67" rows="2" name="anw3"></textarea></td>
	</tr>
	<tr>
		<td align="center"><p><font color="#FFFFFF">选项D</font></p></td>
        <td><textarea class="textarea" cols="67" rows="2" name="anw4"></textarea></td>
	</tr>
			
	<tr>
		<td align="center"><p><font color="#FFFFFF">考题正确答案</font></p>
		</td>
        <td><textarea class="textarea" cols="67" rows="8" name="kt_zqdaan"></textarea></td>
    </tr><br>
		
	
		<td align="center"><input name="Submit2" type="submit" value="添加考题"></td>
	
			</table>
	</form>
	  
   
   
   
  </body>
</html>