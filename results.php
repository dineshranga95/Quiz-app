
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.wrapper{
		width:80%;
		margin: auto;
		background: pink;
		padding-bottom: 18px;
		height: 700px;
			}
		.login{
				border: 1px solid black; 
				margin:5% 30%;
				padding: 20px;
				background: lightgrey;

			}
		.input{
			text-align: center;
			font-size: 20px;
			margin: 25px 0;
	
		}
		.text{
			font-size: 25px;
			margin: 25px 0;
		}
		.submit{
			font-size: 25px;
		
		}
		.submit:hover{
			background: grey;
		}
		.sign{
			font-size: 25px;
			text-align: center;
		}
		.a:hover{
			color: red;
		}
		.error{
			font-size: 25px;
			text-align: center;color: red;
		}
		.list{
			background: red;
			text-align: center;
		}
		.list ul{
			list-style-type: none;
			padding: 10px;<!DOCTYPE html>
		}
		li{
			display: inline;
			margin:10px;
		}
		a{
			text-decoration: none;
			font-size: 25px;
			background: lightgrey;
			color: black;
			padding: 5px 10px;
		}
		.s{
			margin-top: 100px;
			font-size: 75px;
		}
		</style>

</head>
	
<body>
	
<div class="wrapper">
	<div  style="font-size: 70px;text-align: center;border:1px solid black;background: brown;color: white;padding: 15px"><b>Online Quiz Application</b>
	</div>
		<div class="list">
		<ul>
			<li><a href="quiz.php">New Quiz</a></li>
			<li><a href="login.php">Log Out</a></li>
		</ul>
	</div>
	
	
		<?php
		
		$answer1_1=$_POST['answerOne1'];
		$answer2_1=$_POST['answerTwo1'];
		$answer3_1=$_POST['answerThr1'];
		$answer1_2=$_POST['answerOne2'];
		$answer2_2=$_POST['answerTwo2'];
		$answer3_2=$_POST['answerThr2'];
		$answer1_3=$_POST['answerOne3'];
		$answer2_3=$_POST['answerTwo3'];
		$answer3_3=$_POST['answerThr3'];
		$score=0;
		if($answer1_1=="A"){$score++;}
		if($answer2_1=="B"){$score++;}
		if($answer3_1=="D"){$score++;}
		if($answer1_2=="A"){$score++;}
		if($answer2_2=="D"){$score++;}
		if($answer3_2=="A"){$score++;}
		if($answer1_3=="C"){$score++;}
		if($answer2_3=="B"){$score++;}
		if($answer3_3=="B"){$score++;}
		echo "<center> <div class='s' >Your Score is:<br> $score/3</div></center>";
	
	 ?>

	
	</div>
	</body>
	</html>	