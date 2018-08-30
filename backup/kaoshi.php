<!doctype html>
<?php
	session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
	<script src="js/time.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/kaoshi.css" type="text/css">
</head>
<body background="images/demo-1-bg.jpg" onLoad="jishiqi();"> 
	
	<?php
	$examTypeBig=$_SESSION['kt_lb'];
	$examTypeLittle=$_SESSION['kt_lx'];		 
	$examTypeBig_G=iconv('UTF-8','GBK',$examTypeBig);
	$examTypeLittle_G=iconv('UTF-8','GBK',$examTypeLittle);
	
	$rightAnswer=array('0','0','0','0','0');						
	$position="localhost";
	$linkInfo=array("Database"=>"db_online","UID"=>"sa","PWD"=>"19970714MA");
	$sqlWord="select kt_nr,anw1,anw2,anw3,anw4,kt_zqdaan from tb_kt where kt_lb='$examTypeBig_G' and kt_lx='$examTypeLittle_G'";
	$linkStatus=sqlsrv_connect($position,$linkInfo);
	$questionTexts=array('0','0','0','0','0');
	$answerText=array(array('0','0','0','0'),array('0','0','0','0'),array('0','0','0','0'),array('0','0','0','0')
						,array('0','0','0','0'));
	$i = 0;

	if($linkStatus!=0){
	$ret = sqlsrv_query($linkStatus,$sqlWord);
	while($obj = sqlsrv_fetch_object($ret)){
		$questionTexts[$i] = $obj->kt_nr;
		$answerText[$i][0]=$obj->anw1;
		$answerText[$i][1]=$obj->anw2;
		$answerText[$i][2]=$obj->anw3;
		$answerText[$i][3]=$obj->anw4; 
		$rightAnswer[$i]=$obj->kt_zqdaan;
		$questionTexts[$i]=iconv('GBK','UTF-8',$questionTexts[$i]);
		$answerText[$i][0]=iconv('GBK','UTF-8',$answerText[$i][0]);
		$answerText[$i][1]=iconv('GBK','UTF-8',$answerText[$i][1]);
		$answerText[$i][2]=iconv('GBK','UTF-8',$answerText[$i][2]);
		$answerText[$i][3]=iconv('GBK','UTF-8',$answerText[$i][3]);
		$rightAnswer[$i]=iconv('GBK','UTF-8',$rightAnswer[$i]);
		$i++;
			}
		$_SESSION['rightAnswer']=array($rightAnswer[0],$rightAnswer[1],$rightAnswer[2],$rightAnswer[3],$rightAnswer[4]);
		}
		else{
			echo "ERROR";
			echo "<script> alert('数据库连接有问题，请通知管理员检查！'); </script>";
		}
		sqlsrv_close($linkStatus);
	?>
	<div id="page" class="page">
		<div class="zhanwei">
			你好 <?php echo $_SESSION['name'] ?>同学，正在考试，请安心答题！
		</div>
		<div class="right">
			<div id="jishititle" class="jishiqiTitle">
			<div id="datikaTitle" class="datikaTitle">
				剩余时间
			</div>
			<div id="jishiqi" class="jishiqi">
				<input type="text" id="mss" readonly="readonly" class="daojishi" value="2小时0分钟0秒">
			</div>
			</div>
			<div id="title" class="title">
				<input type="text" id="examType" readonly="readonly" class="examType" value="<?php echo "$examTypeBig" ?>">
			</div>
			<div id="title" class="title1">
				<input type="text" id="examType" readonly="readonly" class="examType" value="<?php echo "$examTypeLittle" ?>试题">
			</div>
			<div id="examInfoDiv" class="examInfoDiv">
				<div class="examInfoDiv">
				<div class="examInfozhanwei">
				</div>
				<div class="examInfo">
					试题信息：
				</div>
				<div class="examInfo">
					单选题5个
				</div>
				<div class="examInfozhanwei">
				</div>
				<div class="examInfo">
					考试时间：
				</div>
				<div class="examInfo">
					2小时30分钟
				</div>
				</div>
				
			</div>
		</div>
		<div id="top" class="top">
		
		</div>
	<!-- 第一题-->
		<form name="answerResult" action="result.php" method="post">
			<div class="examOut">
				<div id="examination" class="examination">
					<div id="questionNum" class="questionNum">
						<img src="images/1.png" class="questionNumImg">
					</div>
					<div id="question1" class="question">
						<div class="questionText">
							<?php
								
								$i=0;
								echo "$questionTexts[$i]";
							?>
						</div>		
					</div>
					<div id="answer1" class="answerDiv">
						<hr>
						<div class="answer">
							<input name="question1Answer" type="radio" value="0" style="display:none" onChange="count()" checked>
							<div class="answerChose">
								<input name="question1Answer" type="radio" class="radio" onChange="count()"  value="A"/>
								<div class="answerText">
									<?php echo $answerText[$i][0] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question1Answer" type="radio" class="radio" onChange="count()" value="B"/>
								<div class="answerText">
									<?php echo $answerText[$i][1] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
							<input name="question1Answer" type="radio" class="radio" onChange="count()" value="C"/>
								<div class="answerText">
									<?php echo $answerText[$i][2] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
							<input name="question1Answer" type="radio" class="radio" onChange="count()" value="D"/>
								<div class="answerText">
									<?php echo $answerText[$i][3];$i++; ?>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- 第二题 -->
			<div class="examOut">
				<div id="examination" class="examination">
					<div id="questionNum" class="questionNum">
						<img src="images/2.png" class="questionNumImg">
					</div>
					<div id="question2" class="question">
						<div class="questionText">
							<?php
								echo "$questionTexts[$i]";
							?>
						</div>		
					</div>
					<div id="answer2" class="answerDiv">
						<hr>
						<div class="answer">
							<input name="question2Answer" type="radio" value="0" style="display:none" onChange="count()" checked>
							<div class="answerChose">
								<input name="question2Answer" type="radio" class="radio" onChange="count()" value="A"/>
								<div class="answerText">
									<?php echo $answerText[$i][0] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question2Answer" type="radio" class="radio" onChange="count()" value="B"/>
								<div class="answerText">
									<?php echo $answerText[$i][1] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question2Answer" type="radio" class="radio" onChange="count()" value="C"/>
								<div class="answerText">
									<?php echo $answerText[$i][2] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
							<input name="question2Answer" type="radio" class="radio" onChange="count()" value="D"/>
								<div class="answerText">
									<?php echo $answerText[$i][3];$i++; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 第三题 -->
			<div class="examOut">
				<div id="examination" class="examination">
					<div id="questionNum" class="questionNum">
						<img src="images/3.png" class="questionNumImg">
					</div>
					<div id="question3" class="question">
						<div class="questionText">
							<?php
								echo "$questionTexts[$i]";
							?>
						</div>		
					</div>
					<div id="answer3" class="answerDiv">
						<hr>
						<div class="answer">
							<input name="question3Answer" type="radio" value="0" style="display:none" onChange="count()" checked>
							<div class="answerChose">
								<input name="question3Answer" type="radio" class="radio" onChange="count()" value="A"/>
								<div class="answerText">
									<?php echo $answerText[$i][0] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question3Answer" type="radio" class="radio" onChange="count()" value="B"/>
								<div class="answerText">
									<?php echo $answerText[$i][1] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question3Answer" type="radio" class="radio" onChange="count()" value="C"/>
								<div class="answerText">
									<?php echo $answerText[$i][2] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question3Answer" type="radio" class="radio" onChange="count()" value="D"/>
								<div class="answerText">
									<?php echo $answerText[$i][3]; $i++; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 第四题 -->
			<div class="examOut">
				<div id="examination" class="examination">
					<div id="questionNum" class="questionNum">
						<img src="images/4.png" class="questionNumImg">
					</div>
					<div id="question4" class="question">
						<div class="questionText">
							<?php
								echo "$questionTexts[$i]";
							?>
						</div>		
					</div>
					<div id="answer4" class="answerDiv">
						<hr>
						<div class="answer">
							<input name="question4Answer" type="radio" value="0" style="display:none" onChange="count()" checked>
							<div class="answerChose">
								<input name="question4Answer" type="radio" class="radio" onChange="count()" value="A"/>
								<div class="answerText">
									<?php echo $answerText[$i][0] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question4Answer" type="radio" class="radio" onChange="count()" value="B"/>
								<div class="answerText">
									<?php echo $answerText[$i][1] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
							<input name="question4Answer" type="radio" class="radio" onChange="count()" value="C"/>
								<div class="answerText">
									<?php echo $answerText[$i][2] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question4Answer" type="radio" class="radio" onChange="count()" value="D"/>
								<div class="answerText">
									<?php echo $answerText[$i][3]; $i++; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 第五题 -->
			<div class="examOut">
				<div id="examination" class="examination">
					<div id="questionNum" class="questionNum">
						<img src="images/5.png" class="questionNumImg">
					</div>
					<div id="question5" class="question">
						<div class="questionText">
							<?php
								echo "$questionTexts[$i]";
							?>
						</div>		
					</div>
					<div id="answer5" class="answerDiv">
						<hr>
						<div class="answer">
							<input name="question5Answer" type="radio" value="0" style="display:none" onChange="count()" checked>
							<div class="answerChose">
								<input name="question5Answer" type="radio" class="radio" onChange="count()" value="A"/>
								<div class="answerText">
									<?php echo $answerText[$i][0] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question5Answer" type="radio" class="radio" onChange="count()" value="B"/>
								<div class="answerText">
									<?php echo $answerText[$i][1] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question5Answer" type="radio" class="radio" onChange="count()" value="C"/>
								<div class="answerText">
									<?php echo $answerText[$i][2] ?>
								</div>
							</div>
						</div>
						<div class="answer">
							<div class="answerChose">
								<input name="question5Answer" type="radio" class="radio" onChange="count()" value="D"/>
								<div class="answerText">
									<?php echo $answerText[$i][3]; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 完-->

			<div class="bottomzhanwei">
			</div>
			<div class="jiaojuanDiv">
				<div class="status" id="status">	
					<span id="noAnswerCount"></span>
					
				</div>
				<input type="submit" id="submit" class="submitButton" value="不答了，提交">
			</div>
		</form>
	</div>
	<script>count();</script>
</body>
</html>