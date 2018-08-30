function checkname(){ 
var div = document.getElementById("div1"); 
div.innerHTML = ""; 
var name1 = document.form1.admin.value; 
if (name1 === "") { 
div.innerHTML = "姓名不能为空！"; 
document.form1.admin.focus(); 
return false; 
} 
if (name1.length < 2 || name1.length > 16) { 
div.innerHTML = "姓名输入的长度2-16个字符！"; 
document.form1.admin.select(); 
return false; 
} 
var charname1 = name1.toLowerCase(); 
for (var i = 0; i < name1.length; i++) { 
var charname = charname1.charAt(i); 
if (!(charname >= 0 && charname <= 9) && (!(charname >= 'a' && charname <= 'z')) && (charname !== '_')) { 
div.innerHTML = "姓名包含非法字母，只能包含字母，数字，和下划线"; 
document.form1.admin.select(); 
return false; 
} 
} 
return true;

}

function checkpassword(){ 
var div = document.getElementById("div2"); 
div.innerHTML = ""; 
var password = document.form1.passwd.value; 
if (password === "") { 
div.innerHTML = "密码不位空！"; 
document.form1.passwd.focus(); 
return false; 
} 
if (password.length < 4 || password.length > 12) { 
div.innerHTML = "密码长度4-12位"; 
document.form1.passwd.select(); 
return false; 
} 
return true; 
}

function checkrepassword(){ 
var div = document.getElementById("div3"); 
div.innerHTML = ""; 
var password = document.form1.passwd.value; 
var repass = document.form1.passwd.value; 
if (repass === "") { 
div.innerHTML = "密码不位空！"; 
document.form1.passwd.focus(); 
return false; 
} 
if (password !== repass) { 
div.innerHTML = "输入密码和确认密码长度不一致"; 
document.form1.passwd.select(); 
return false; 
} 
return true; 
}

function check(){ 
if (checkname() && checkpassword() && checkrepassword()) { 
return true; 
} 
else { 
return false; 
} 
} 