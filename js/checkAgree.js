// JavaScript Document
function check()
{
	"use strict";
	var x=document.getElementById("checkBox");
	if(x.checked){
		window.location.href="kaoshi.php";
	}
	else{
		alert("请勾选同意！");
	}
}