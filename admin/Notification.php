<!DOCTYPE html>
<html>
<?php
session_start();
require 'processor.php';
$con = db_connect();
$sql="SELECT * from events WHERE id=1";
		if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
if(!$_SESSION['session_id']){
	
   }
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	//echo $_POST['event'];
	// escape variables for security
        $content = mysqli_real_escape_string($con, $_POST['content']);
        $priority = mysqli_real_escape_string($con, $_POST['priority']);
        


		$sql="INSERT INTO notification (`content`,`priority`) values ('$content','$priority')";

		if (!mysqli_query($con,$sql)) 
		{
		  die('Error: ' . mysqli_error($con));
		}
		header('location:Notification.php');
	
	mysqli_close($con);		
	}
?>

	<head>
		<title>Arangu2K15</title>
		<style>
			body
			{
				margin:0px;
				background-color: #D3D3D3;
			}
			.header
			{
				background-color: #0000FF;
				height :35px;
				width: 100%;
				font-size : 125%;
			}
			.heading
			{
				text-align: center;
				vertical-align: text-center;
				color: #D3D3D3;
				width: 100%;
				display:inline-block;
				position:absolute;
			}
			.logout
			{
				width: 2%;
				color: #D3D3D3;
				display:inline-block;
				position:absolute;
				right: 0px;
				background-image: url("Images/Logout_Blue.png");
				background-size: 20px 20px;
				background-repeat: no-repeat;
				background-position: 5px 0px;
				cursor:pointer;
			}
			.logout:hover
			{
				display:inline-block;
				position:absolute;
				right: 0px;
				background-image: url("Images/Logout_Red.png");
				background-size: 20px 20px;
				background-repeat: no-repeat;
				vertical-align: text-right;
				background-position: 5px 0px;
				cursor:pointer;
			}
			.home
			{
				width: 2%;
				color: #D3D3D3;
				display:inline-block;
				background-image: url("Images/Home_Blue.png");
				background-size: 20px 20px;
				background-repeat: no-repeat;
				cursor:pointer;
			}
			.home:hover
			{
				width: 2%;
				color: #D3D3D3;
				display:inline-block;
				background-image: url("Images/Home_Green.png");
				background-size: 20px 20px;
				background-repeat: no-repeat;
				cursor:pointer;
			}
			.container
			{
				background-color: white;
				border-radius: 25px;
  				box-shadow: 0px 0px 10px black;
				height :575px;
				width: 60%;
				text-align: center;
				vertical-align: text-top;
				padding-top: 15px;
				padding-bottom: 15px;
				position:absolute;
				top:7%;
  				left:20%;
			}
			
		</style>

	</head>
	<body>
		<header>
			<div class="header">
				<div class="header home" onclick="window.location='home.php';"></div>
				<div class="header heading"><b>Arangu2K15</b></div>
				<div class="header logout" onclick="window.location='logout.php';"></div>
			</div>
		</header>	
		<div class="container">
		<form name="user" enctype="multipart/form-data" action="Notification.php" method="POST">
		<table style="width:80%" align="center">

<tr bgcolor="#696969">
  <th colspan="2"><font color="white">Notification</font></th>
</tr>
<tr>
  <td align="center" width="75%"><label>Content</label><textarea rows="10" cols="50" style="font-size:20px" id="content" name="content" maxlength="1000" autofocus></textarea></td>
  </tr>
  <tr>
  <td><label>Priority : </label><input style="font-size:20px" type="number" id="priority" name="priority" maxlength="3" size="3"/></td>

</table>
<input  style="font-size:20px ; align:center" type="submit" name="Submit" value="UPDATE"/>

</form>
	</body>
</html>
