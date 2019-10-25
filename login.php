<?php 

	$conn=mysqli_connect("localhost","root","","quiz");
	$error="";
	if(isset($_POST['submit'])){
		$username=$_POST['user'];
		$password=$_POST['pwd'];

		$sql="SELECT * FROM signup WHERE Username='$username' AND Password='$password'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)){
			header("location:quiz.php");
		}else{
			$error="Not match the username or password";
		}
	}
 ?>
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
	<div  style="font-size: 70px;text-align: center;border:1px solid black;background: brown;color: white;padding: 15px"><b>Online Quiz Application</b>
	</div>
	<div class="list">
		<ul>
			<li><a href="sign.php">Register</a></li>
			<li><a href="login.php">Sign In</a></li>
		</ul>
	</div>
	<div class="login">
	<h2 style="text-align: center; font-size: 50px;">Login Form</h2>
	<hr>
	<form action="login.php" method="POST">
		<table>
			<tr>
				<td class="text">User name :</td>
				<td ><input type="text" name="user" placeholder="User name" class="input" required></td>
			</tr>
			<tr>
				<td class="text">Password :</td>
				<td ><input type="password" name="pwd" placeholder="Password" class="input" required></td>
			</tr>
			<tr style="text-align: center;"><td colspan="2"><input type="submit" name="submit" value="Login" class="submit"></td></tr>
		</table>

	</form>
	<div class="error"><?php echo $error; ?></div>
	<br>
	
	</div>
</div>
</body>
</html>