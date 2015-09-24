<?php
require 'processor.php';
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	$con = db_connect();
	// escape variables for security
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = is_match($con,$username,$password);
	
	if ($result)
	{		
		$row = mysqli_fetch_array($result);
		$_SESSION['session_id']=$row['id'];
			if($row['username']==$username && $row['password']==$password)
			{
				header('location:home.php');
			}
			else 
			{
			$error = "Authentication Failure!";
			}
	} 
	mysqli_close($con);		
}	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Arangu2K15</title>
		
		<script>
		window.onload = function(){
   		document.getElementById("username").focus();
								};
		</script>

		<style>
			body
			{
				margin:0px;
				background-color: #D3D3D3;
			}
			.header
			{
				background-color: #0000FF;
				height :60px;
				width: 100%;
				text-align: center;
				vertical-align: text-center;
				padding-top: 1px;
				padding-bottom: 15px;
				box-shadow: 0px 5px 5px #888888;
				color: #D3D3D3;
			}	
			.container
			{
				background-color: white;
				border-radius: 25px;
  				box-shadow: 0px 0px 10px black;
				height :250px;
				width: 30%;
				text-align: center;
				vertical-align: text-top;
				padding-top: 15px;
				padding-bottom: 15px;
				position:absolute;
				top:25%;
  				left:35%;
			}	
			.sign_in
			{
				color: #00FFFF;
			}
			
			.input 
			{
				-webkit-transition: all 0.30s ease-in-out;
				-moz-transition: all 0.30s ease-in-out;
				-ms-transition: all 0.30s ease-in-out;
				-o-transition: all 0.30s ease-in-out;
				outline: none;
				padding: 3px 0px 3px 3px;
				margin: 5px 1px 3px 0px;
				border: 1px solid #DDDDDD;
				font-size: 150%;
				border-radius: 10px;
			}
 
			.input:focus,.input.focus
			{
				box-shadow: 0 0 5px rgba(81, 203, 238, 1);
				padding: 3px 0px 3px 3px;
				margin: 5px 1px 3px 0px;
				border: 1px solid rgba(81, 203, 238, 1);
				font-size: 150%;
				border-radius: 10px;
			}
			
			.button 
			{
				font-family: 'arial black';
				color: #FFFFFF !important;
				font-size: 18px;
				text-shadow: 1px 1px 0px #7CACDE;
				box-shadow: 1px 1px 1px #BEE2F9;
				padding: 10px 25px;
				-moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				border-radius: 10px;
				border: 2px solid #3866A3;
				background: #63B8EE;
				background: linear-gradient(top,  #63B8EE,  #468CCF);
				background: -ms-linear-gradient(top,  #63B8EE,  #468CCF);
				background: -webkit-gradient(linear, left top, left bottom, from(#63B8EE), to(#468CCF));
				background: -moz-linear-gradient(top,  #63B8EE,  #468CCF);
				cursor:pointer;
			}
			.button:hover
			{
				color: #14396A !important;
				background: #468CCF;
				background: linear-gradient(top,  #468CCF,  #63B8EE);
				background: -ms-linear-gradient(top,  #468CCF,  #63B8EE);
				background: -webkit-gradient(linear, left top, left bottom, from(#468CCF), to(#63B8EE));
				background: -moz-linear-gradient(top,  #468CCF,  #63B8EE);
				cursor:pointer;
			}
			
			.logfail
			{
				color : red;
				font-size: 18px;
			}
		</style>
	</head>
	<body>
		<header>
		<div class="header"><h1>Arangu2K15</h1></div>
		</header>			
			<div class="container">
				<form action="index.php" method="POST">
					<p>
						<input class="input" id="username" name="username" required="required" type="text" placeholder="Username"/>
					</p>
					<p>
						<input class="input" id="password" name="password" required="required" type="password" placeholder="Password" />
					</p>
					<div class="logfail"><?php echo $error; ?></div>
               
               
					<p> <input type="submit" value="Sign In" class="button"/> </p>
				</form>
			</div>
			</div>
	</body>
</html>
