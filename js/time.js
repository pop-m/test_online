// JavaScript Document			
	var count_time = 30;
	function jishiqi(){
	"use strict";
	var t;
	var sec = count_time%60;
	var hour = Math.floor(count_time/3600);
	var min = Math.floor(count_time/60 - hour*60);
	if(hour>0){
		document.getElementById("mss").value=hour+"小时"+min+"分钟"+sec+"秒";
	}
	else{
		if(min>0){
			document.getElementById("mss").value=min+"分钟"+sec+"秒";
		}
		else{
			if(sec>0){
				document.getElementById("mss").value=sec+"秒";
			}
			else{
				document.getElementById("mss").value=0+"秒";
				window.alert("时间到,即将自动提交！");
				document.getElementById("submit").click();
				return;
			}
		}
	}
	count_time--;
	t=setTimeout(function(){jishiqi();},1000);
}

function count(){
		"use strict";
		var radioInfo=new Array(5);
		var i=0;
		var radio1Info=document.getElementsByName("question1Answer");
		var radio2Info=document.getElementsByName("question2Answer");
		var radio3Info=document.getElementsByName("question3Answer");
		var radio4Info=document.getElementsByName("question4Answer");
		var radio5Info=document.getElementsByName("question5Answer");
		for(i=0;i<5;i++){
			if(radio1Info[i].checked){
			   	radioInfo[0]=radio1Info[i].value;
				break;
			}
		}
		for(i=0;i<5;i++){
			if(radio2Info[i].checked){
			   	radioInfo[1]=radio2Info[i].value;
				break;
			}
		}
		for(i=0;i<5;i++){
			if(radio3Info[i].checked){
			   	radioInfo[2]=radio3Info[i].value;
				break;
			}
		}
		for(i=0;i<5;i++){
			if(radio4Info[i].checked){
			   	radioInfo[3]=radio4Info[i].value;
				break;
			}
		}
		for(i=0;i<5;i++){
			if(radio5Info[i].checked){
			   	radioInfo[4]=radio5Info[i].value;
				break;
			}
		}
		var count1=0;
		for(i=0;i<5;i++){
			if(radioInfo[i]==="0"){
			   count1++;
			}
		}
		if(count1===0){
		   document.getElementById("noAnswerCount").innerHTML="您已全部答完，请检查后提交！";
		   }
	else{
		document.getElementById("noAnswerCount").innerHTML="还有"+count1+"道题没有答完哦！";
	}
		
}
