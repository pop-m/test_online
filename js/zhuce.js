function checkname(){ 
	var div = document.getElementById("div1");
	div.innerHTML = "";
	var name1 = document.form1.username.value;
	if (document.form1.username.value === "") {
		div.innerHTML = "姓名不能为空！";
		document.form1.username.focus();
		return false;
	}
	if (name1.length < 4 || name1.length > 16) {
		div.innerHTML = "姓名输入的长度4-16个字符！";
		document.form1.username.select();
		return false;
	}
	return true;
}

function checkpass(){
	var div = document.getElementById("div2");
	div.innerHTML = "";
	var password = document.form1.pass.value;
	if (password === "") {
		div.innerHTML = "密码不位空！";
		document.form1.pass.focus();
		return false;
	}
	if (password.length < 4 || password.length > 12) {
		div.innerHTML = "密码长度4-12位";
		document.form1.pass.select();
		return false;
	}
	return true;
}

function checkrepass(){
	var div = document.getElementById("div3");
	div.innerHTML = "";
	var password = document.form1.pass.value;
	var repass = document.form1.passtest.value;
	if (repass === "") {
		div.innerHTML = "密码不位空！";
		document.form1.passtest.focus();
		return false;
	}
	if (password !== repass) {
		div.innerHTML = "输入密码和确认密码不一致";
		document.form1.passtest.select();
		return false;
	}
	return true;
}

function check(){
	if (checkname() && checkpass() && checkrepass()) {
		return true;
	}
	else {
		return false;
	}
} 

