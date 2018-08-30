<!doctype html>
<?php
	session_start();
	$_SESSION['name']="lang";
	$_SESSION['kt_lb']="计算机类";
	$_SESSION['kt_lx']="C语言";
?>
<html>
<head>
<meta charset="utf-8">
<title>正在考试</title>
<link rel="stylesheet" href="css/xieyi.css" type="text/css">
<script src="js/checkAgree.js" type="text/javascript"></script>
</head>

<body background="images/demo-1-bg.jpg">
	<div class="page">
		<div class="zhanwei"></div>
		<div class="middleDiv">
			<div class="middle">
			<div class="top">
			考生协议
			</div>
			<textarea readonly="readonly" class="textkuang">

第一条 考生承诺
				
	（一）考生保证不利用本网站从事任何违反法律法规和政策规定的活动。 考生保证不进行针对本网站的任何恶意行为。		
	（二）考生承诺已认真阅读本协议，凡点击“同意”之后，即表示已与我方自愿达成本协议并完全接受协议各条款的约束。
	（三）考生承诺将仔细阅读本系统指导考生操作的规定（如报考须知等），并严格按照其要求操作。	
				
第二条 考生个人资料的提供及其隐私保护		
				
	（一）鉴于本系统的安全性，为了保证报考的有效性，考生同意：	
		1、提供姓名、身份证号、准考证号等真实准确的个人资料。	
		2、考生每次报考时所填写的资料均符合及时、详尽、准确的要求。
	（二）我方承诺尊重和保护考生个人资料的隐私，不对除自学考试机构、主考院校、助学单位和考生个人以外的公众公开其个人信息资料。但此承诺在出现下列情形时自动失效：	
		1、考生（包括授权委托人）特别要求我方公开这些信息，并采用书面的形式提出上述要求。		
		2、在符合国家相应法律和政策规定的情况下，拥有合法调查权的国家机关索取考生个人信息。	
		3、非我方过失，因考生自身操作原因或不可抗力的作用所导致的个人信息泄漏。
	（三）我方（包括各级考试机构、主考院校、助学单位）因维护系统、组考、管理考籍等内部管理工作需要，在相应的工作范围内使用并公开考生个人信息资料不受本第（二）款的限制。		
	（四）考生有查阅本人信息并修改其非基本信息的权利。 		
	（五）如果考生提供的资料不真实、不准确，我方保留结束考生使用本系统服务的权利。	
			
第三条 服务条款的修改	
			
	（一）根据工作需要，我方有权随时修改系统的服务条款和服务内容。		
	（二）系统服务条款及服务内容一旦发生变动，我方将会在页面上提示修改内容。如果考生不接受修改内容，则即时取消考生使用服务资格。考生若要继续使用相关服务，需从以下两方面确认：	
		1、确认系统服务及其变动条款。
		2、同意接受所有的服务条款限制
	</textarea>
		</div>
		</div>
		<div class="agree">
			<br>
			<input type="checkBox" id="checkBox" value="agree" ><span style="color: chartreuse">我同意以上协议<span><br><br>
			<button id="agreeBut" onClick="check();" style="text-align: center">提交</button>
		</div>
	</div>
</body>
</html>