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
			}
		.que{
				border: 1px solid black; 
				margin:2% 20%;
				padding: 20px;
				background: lightgrey;
				font-size: 25px;

			}
		.input{
			text-align: center;
			font-size: 25px;
			margin: 25px 0;
	
		}
		.text{
			font-size: 25px;
			margin: 25px 0;
		}
		.submit{
			font-size: 30px;
		
		}
		.submit:hover{
			
			color: red;
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
			padding: 10px;
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

	</style>
</head>
<body>
<div class="wrapper">
	<div  style="font-size: 70px;text-align: center;border:1px solid black;background: brown;color: white;padding: 15px"><b>Online Quiz App</b>
	</div>
	<div class="list">
		<ul>
			<li><a href="results.php">Result</a></li>
			<li><a href="login.php">Log Out</a></li>
		</ul>
	</div>
	<div class="que">
		<?php 
		$qid=rand(1,3);
	 

		if ($qid==1){
			echo "
				<form action='results.php' method='POST' id='quizForm' id='1'>
				<ul>
					<li><h3>1)what does html stands for?</h3>
					<div>
					<input type='radio' name='answerOne1' id='answerOne' value='A' > 
					<label for='answerOneA'>A) Hyper text markup language</label>
					</div>
					<div>
					<input type='radio' name='answerOne1' id='answerOne' value='B' > 
					<label for='answerOneB'>B) Hyper transfer markup language</label>
					</div>
					<div>
					<input type='radio' name='answerOne1' id='answerOne' value='C' > 
					<label for='answerOneC'>C) Hyper transport markup language</label>
					</div>
					<div>
					<input type='radio' name='answerOne1' id='answerOne' value='D' > 
					<label for='answerOneD'>D) Hyper test markup language</label>
					</div>
					</li>
					<li><h3>2)Cybercrime' refers to the........ ?</h3>
					<div>
					<input type='radio' name='answerTwo1' id='answerTwo' value='A' > 
					<label for='answerTwoA'>A) Stolen of information in storage device</label>
					</div>
					<div>
					<input type='radio' name='answerTwo1' id='answerTwo' value='B' > 
					<label for='answerTwoB'>B) Crime involves in computers and network</label>
					</div>
					<div>
					<input type='radio' name='answerTwo1' id='answerTwo' value='C' > 
					<label for='answerTwoC'>C) Stolen of data in sorage device</label>
					</div>
					<div>
					<input type='radio' name='answerTwo1' id='answerTwo' value='D' > 
					<label for='answerTwoD'>D) Stolen of money</label>
					</div>
					</li>
					<li><h3>3)When add a loop?</h3>
					<div>
					<input type='radio' name='answerThr1' id='answerThr' value='A' > 
					<label for='answerThrA'>A) You can show the presentation</label>
					</div>
					<div>
					<input type='radio' name='answerThr1' id='answerThr' value='B' > 
					<label for='answerThrB'>B) Add animations for each slide</label>
					</div>
					<div>
					<input type='radio' name='answerThr1' id='answerThr' value='C' > 
					<label for='answerThrC'>C)Customize the presentation</label>
					</div>
					<div>
					<input type='radio' name='answerThr1' id='answerThr' value='D' > 
					<label for='answerThrD'>D)The presentation run cuntinuously</label>
					</div>
					</li>
				</ul>
				<center><input type='submit' value='submit' class='submit'></center>
				</form>";
		
		}
		if ($qid==2){
			echo "
				<form action='results.php' method='POST' id='quizForm' id='2'>
				<ol>
					<li><h3>1)To manage file in a computer, operating system uses?</h3>
					<div>
					<input type='radio' name='answerOne2' id='answerOne' value='A' > 
					<label for='answerOneA'>A) Files and folders</label>
					</div>
					<div>
					<input type='radio' name='answerOne2' id='answerOne' value='B' > 
					<label for='answerOneB'>B) Folders and sub folders</label>
					</div>
					<div>
					<input type='radio' name='answerOne2' id='answerOne' value='C' > 
					<label for='answerOneC'>C) Folders</label>
					</div>
					<div>
					<input type='radio' name='answerOne2' id='answerOne' value='D' > 
					<label for='answerOneD'>D) None of the above</label>
					</div>
					</li>
					<li><h3>2)What is/are the feature(s) of excel?</h3>
					<div>
					<input type='radio' name='answerTwo2' id='answerTwo' value='A' > 
					<label for='answerTwoA'>A) calculation</label>
					</div>
					<div>
					<input type='radio' name='answerTwo' id='answerTwo' value='B' > 
					<label for='answerTwoB'>B)creating charts</label>
					</div>
					<div>
					<input type='radio' name='answerTwo2' id='answerTwo' value='C' > 
					<label for='answerTwoC'>C) Data managing</label>
					</div>
					<div>
					<input type='radio' name='answerTwo2' id='answerTwo' value='D' > 
					<label for='answerTwoD'>D) All of the above</label>
					</div>
					</li>
					<li><h3>3)Full form of URL is ......?</h3>
					<div>
					<input type='radio' name='answerThr2' id='answerThr' value='A' > 
					<label for='answerThrA'>A) Uniform Resource Locator</label>
					</div>
					<div>
					<input type='radio' name='answerThr2' id='answerThr' value='B' > 
					<label for='answerThrB'>B) Uniform Resource Link </label>
					</div>
					<div>
					<input type='radio' name='answerThr2' id='answerThr' value='C' > 
					<label for='answerThrC'>C)Uniform Registered Link</label>
					</div>
					<div>
					<input type='radio' name='answerThr2' id='answerThr' value='D' > 
					<label for='answerThrD'>D)Unified Resource link</label>
					</div>
					</li>
				</ol>
				<center><input type='submit' value='submit' class='submit'></center>
				</form>";
		}
		if ($qid==3){
			echo "
				<form action='results.php' method='POST' id='quizForm' id='3'>
				<ol>
					<li><h3>1)Which of the following is not a system software?</h3>
					<div>
					<input type='radio' name='answerOne3' id='answerOne' value='A' > 
					<label for='answerOneA'>A) Microsoft Windows</label>
					</div>
					<div>
					<input type='radio' name='answerOne3' id='answerOne' value='B' > 
					<label for='answerOneB'>B) Antivirus software</label>
					</div>
					<div>
					<input type='radio' name='answerOne3' id='answerOne' value='C' > 
					<label for='answerOneC'>C) Spreadsheet software</label>
					</div>
					<div>
					<input type='radio' name='answerOne3' id='answerOne' value='D' > 
					<label for='answerOneD'>D) Device drivers software</label>
					</div>
					</li>
					<li><h3>2)ISP is a company that supports?</h3>
					<div>
					<input type='radio'  name='answerTwo3' id='answerTwo' value='A' > 
					<label for='answerTwoA'>A) Telephone connection</label>
					</div>
					<div>
					<input type='radio' name='answerTwo3' id='answerTwo' value='B' > 
					<label for='answerTwoB'>B) Internet service</label>
					</div>
					<div>
					<input type='radio' name='answerTwo3' id='answerTwo' value='C' > 
					<label for='answerTwoC'>C)ADSL facilities</label>
					</div>
					<div>
					<input type='radio' name='answerTwo3' id='answerTwo' value='D' > 
					<label for='answerTwoD'>D) Windows media player</label>
					</div>
					</li>
					<li><h3>3)What is the technology of the 2nd generation computers?</h3>
					<div>
					<input type='radio' name='answerThr3' id='answerThr' value='A' > 
					<label for='answerThrA'>A)IC technology</label>
					</div>
					<div>
					<input type='radio' name='answerThr3' id='answerThr' value='B' > 
					<label for='answerThrB'>B) Transistor technology</label>
					</div>
					<div>
					<input type='radio' name='answerThr3' id='answerThr' value='C' > 
					<label for='answerThrC'>C) Vaccum tube technology</label>
					</div>
					<div>
					<input type='radio' name='answerThr3' id='answerThr' value='D' > 
					<label for='answerThrD'>D)Processor technology</label>
					</div>
					</li>
				</ol>
				<center><input type='submit' value='submit' class='submit'></center>
				</form>";
		}
		?>

	</div>
	
	</div>
</div>
</body>
</html

