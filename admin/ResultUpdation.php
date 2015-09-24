<!DOCTYPE html>
<html>
<?php
session_start();
require 'processor.php';
if(!$_SESSION['session_id']){
	
   }
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$con = db_connect();
	//echo $_POST['event'];
	// escape variables for security
	$event = mysqli_real_escape_string($con, $_POST['event']);
        $First_Name_1 = mysqli_real_escape_string($con, $_POST['First_Name_1']);
        
        $First_Name_2 = mysqli_real_escape_string($con, $_POST['First_Name_2']);
        
        $First_Name_3 = mysqli_real_escape_string($con, $_POST['First_Name_3']);
        
        
        $Second_Name_1 = mysqli_real_escape_string($con, $_POST['Second_Name_1']);
        
        $Second_Name_2 = mysqli_real_escape_string($con, $_POST['Second_Name_2']);
        
        $Second_Name_3 = mysqli_real_escape_string($con, $_POST['Second_Name_3']);
        
        
        $Third_Name_1 = mysqli_real_escape_string($con, $_POST['Third_Name_1']);
        
        $Third_Name_2 = mysqli_real_escape_string($con, $_POST['Third_Name_2']);
        
        $Third_Name_3 = mysqli_real_escape_string($con, $_POST['Third_Name_3']);
        














	$sql="INSERT INTO Results (`event`,`First_Name_1`,`First_Name_2`,`First_Name_3`,`Second_Name_1`,`Second_Name_2`,`Second_Name_3`,`Third_Name_1`,`Third_Name_2`,
`Third_Name_3`,`Flag`) VALUES('$event','$First_Name_1','$First_Name_2','$First_Name_3','$Second_Name_1','$Second_Name_2','$Second_Name_3','$Third_Name_1','$Third_Name_2','$Third_Name_3',1)";
		if (!mysqli_query($con,$sql)) 
		{
		  die('Error: ' . mysqli_error($con));
		}
		header('location:ResultUpdation.php');
	
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
		
		
		
		  <link rel="stylesheet" href="jquery-ui.css">
  <script src="jquery-1.10.2.js"></script>
  <script src="jquery-ui.js"></script>
<script>
    $(function() {
    var availableTags = [
      "Group Song Indian",
	"Bharathanatyam",
	"Cartooning",
	"classical music vocal - female",
	"Classical music vocal - male",
	"Collage",
	"Debate",
	"Elocution - English",
	"Elocution - Malayalam",
	"Essay writing - English",
	"Essay writing - Malayalam",
	"Fancy dress",
	"Folk Dance - Indian single",
	"Freestyling",
	"Group Dance Female",
	"Group Dance Male",
	"Group Song Western",
	"Kadhaprasangam",
	"Kathakali",
	"Keralanadanam",
	"Light Music Vocal Indian - Female",
	"Light Music Vocal Indian - Male",
	"Mappilappattu",
	"Mime",
	"Mimicry",
	"Mohiniyattam",
	"Mono act",
	"Nadanpattu",
	"On the spot painting",
	"Oppana",
	"Other forms of dance",
	"Ottamthullal",
	"Pencil Drawing",
	"Percussion Instrument - Eastern",
	"Percussion Instrument - Western",
	"Photography",
	"poetry writing - english",
	"poetry writing - malayalam",
	"Poster design",
	"Quiz",
	"Recitation - English",
	"Recitation - malayalam",
	"Short Drama",
	"Short story writing - English",
	"Short story writing - Malayalam",
	"Split Screen",
	"Stringed Instrument - Eastern",
	"Stringed Instrument - Western",
	"Tableau",
	"Thiruvathirakali",
	"Western vocal Solo",
	"Wind Instrument - Eastern",
	"Winged Instrument - Western",
	"Mr/Ms Arangu"
    ];
    $( "#event" ).autocomplete({
      source: availableTags
    });

  });
  $(function() {
    var availableTags = [
      "jithinlal - S4 CSE-A",
	"Kevin Tom Varghese  - S4 CE-A",
	"Anand J. - S2 CSE-A",
	"Abin kirshna - S3 EIE-A",
	"Abin kirshna - S3 EIE-A",
	"Nadish Shajahan - S3 CSE-B",
	"Amal P - S4 CSE-A",
	"Akhila Nair - S4 EC-A",
	"Jyothi S - S3 CSE-B",
	"JOTHIS JOSE P - S3 ME-A",
	"Navin K Vincent - S3 CE-B",
	"ANURAG RADHAKRISHNAN - S4 ME-A",
	"Sachin Jacob - S2 CSE-B",
	"Aiswarya Viswanath - S2 EC-A",
	"David vithayathil - S2 EC-A",
	"PONNU KURIAN  - S4 CSE-B",
	"RESHMA K MENON - S4 CSE-B",
	"Meera George - S4 CSE-B",
	"preethika Sebastian - S3 EC-B",
	"Preethika Sebastian - S3 EC-B",
	"bobby antony - S3 ME-A",
	"Sruthi Saira Reji - S3 EC-B",
	"Rithika.S - S3 CSE-B",
	"Riya Thomas - S3 EC-B",
	"Joseph jaison - S3 EC-B",
	"Aysha khan AS - S2 MBA-A",
	"Vaisakh S - S3 CSE-B",
	"Meera surendran - S4 EC-B",
	"Revathy Antony - S4 EC-B",
	"Kavya k u - S4 EC-B",
	"Reshma elezabeth mani - S4 EC-B",
	"shilpa ann isaac - S4 EC-B",
	"Nanditha N Varma - S2 EC-B",
	"Athira.I.S - S3 EIE-A",
	"Srinath V - S2 ME-B",
	"Aysha khan AS - S2 MBA-A",
	"Vishnu das - S2 EC-B",
	"CHRISTINO JACOB  - S3 EC-A",
	"Mridula M Kaimal - S4 CSE-B",
	"Lavanyasree S - S4 CSE-B",
	"indrajith anil - S3 MCA-A",
	"nikhil t das - S3 MCA-A",
	"Khalid N - S3 MCA-B",
	"Ashitha c - S3 CE-A",
	"Anju k - S3 CE-A",
	"Anju k - S3 CE-A",
	"Jovin Joseph  - S4 ME-A",
	"Pavan thomad - S3 ME-B",
	"Pavan thomad - S3 ME-B",
	"Krishnapriya EA - S4 CSE-A",
	"Alfiya Ali - S2 CE-A",
	"Arish Ranjan - S4 ME-A",
	"joseph sebastian - S2 EC-B",
	"Asha Cherian - S4 CSE-A",
	"Krishnaraj K - S2 CE-A",
	"Titto Bobby - S2 ME-A",
	"Keerthi Raj K - S3 CE-B",
	"EMIL VARGHESE - S4 CE-A",
	"DIVYA JOSE - S4 CE-A",
	"Vishnu das - S2 EC-B",
	"Vinayak sai narayanan  - S2 EC-B",
	"Ebin joseph - S2 EC-A",
	"Binoy m baby  - S2 EC-A",
	"Yedukrishnan P.N - S4 ME-A",
	"Suhail Sidhik K - S4 ME-A",
	"Nintachan - S3 CE-B",
	"Martin Luther - S2 MBA-A",
	"James T A - S4 ME-A",
	"Jithin Lal - S4 CSE-A",
	"auntony joy - S4 EIE-A",
	"Binoy m baby  - S2 EC-A",
	"Lakshmi - S4 EC-B",
	"rohit narayanan - S2 CSE-B",
	"Anjana Shaju - S3 EC-A",
	"Anisha Sleeba - S4 EC-A",
	"Vimalraaj s - S2 EC-B",
	"Rehzin p a - S2 EC-B",
	"Akshay azhikodan - S2 EC-A",
	"Shafiq hassan t - S2 EC-B",
	"devika menon - S3 EC-A",
	"cyriac k pazhemadom - S2 ME-A",
	"JOBIN PAUL - S3 ME-B",
	"Adithi - S2 EC-A",
	"Mohammed Zeeshan - S4 CSE-B",
	"Mariya Susan John - S2 EIE-A",
	"Meenu Vincent - S2 EIE-A",
	"Sreelakshmi K.A - S3 EC-B",
	"PAVITHRA PRADEEP  - S4 EC-B",
	"PAVITHRA PRADEEP  - S4 EC-B",
	"Amritha Gagarin - S3 CE-A",
	"Jismy Jose - S4 CSE-A",
	"Abel Diaz - S2 CSE-A",
	"anju raju - S4 CE-A",
	"athira madhu - S4 CE-A",
	"ashwin vj - S4 CE-A",
	"Aarsha Manohar - S2 EC-A",
	"Vinayak G Krishnan - S4 CSE-B",
	"SANGEETH E S  - S4 EC-B",
	"Grace Paul - S2 EC-A",
	"Anupama Varghese - S2 EC-A",
	"Aysha riya - S2 EC-A",
	"Sriram Sankar - S2 ME-B",
	"CHRISTINO JACOB  - S3 EC-A",
	"Athul Mohan - S3 EC-A",
	"Athul Mohan - S3 EC-A",
	"Akhil Mathew k - S2 ME-A",
	"Anto joy - S2 ME-A",
	"Sneha S Warrier  - S4 CSE-B",
	"Rajath R - S2 MBA-B",
	"Aishwarya.B - S2 EC-A",
	"Ashly Paul - S2 EC-A",
	"Joseph Stanly  - S3 EC-A",
	"alryk jude ben fonseca - S2 ME-A",
	"aashin sravan - S2 ME-A",
	"Anand Paul - S3 EC-A",
	"Manish manoj - S2 EEE-A",
	"Ananthu S Nair - S2 EEE-A",
	"Ashok v - S2 EEE-A",
	"Omar Thasleem - S2 EEE-A",
	"muhammad said - S2 EEE-A",
	"Ajad muhammad - S2 EEE-A",
	"Hashim kunnath - S2 EEE-A",
	"Uwais Abdulla - S2 EEE-A",
	"jomish joy - S2 EEE-A",
	"achin bk - S2 EEE-A",
	"Sreerag S - S2 EEE-A",
	"Muhammad safwan - S2 EEE-A",
	"Fazal Mustafa - S2 EEE-A",
	"Neeraj Pm - S2 EEE-A",
	"Joseph Kurian - S2 EEE-A",
	"Kishan Bhas - S2 CE-B",
	"Rexon George Rajan - S3 ME-B",
	"Acsa Avinash Kumar - S2 EC-A",
	"Meera.S - S4 EC-B",
	"ANSU SABU - S4 CSE-A",
	"Revathy.Antony  - S4 EC-B",
	"Kavya.K.U - S4 EC-B",
	"Kavya.K.U - S4 EC-B",
	"Paul Balu - S4 CSE-B",
	"Laxmipriya - S2 CSE-A",
	"Janet peter - S3 EC-A",
	"Neethu Mariya - S3 EC-B",
	"Arish Ranjan - S4 ME-A",
	"Rithu rajan - S2 EC-B",
	"Nimisha benoy - S2 EC-B",
	"praveena harikumar - S2 EC-B",
	"Nima sivan - S2 EC-B",
	"Neeva mathew - S2 EC-B",
	"Aiswarya Lakshmi K P - S2 EEE-A",
	"Paul P Sabu - S2 CSE-B",
	"MADHURYA P - S3 EC-B",
	"Aravind G - S4 CSE-A",
	"Athul Joshy - S2 ME-A",
	"Dhiyeri P Joy - S2 ME-A",
	"Abin Sajeev Mathew - S2 ME-A",
	"Riju John - S2 CSE-B",
	"NIVEDITHA UNNIKRISHNAN - S2 CSE-B",
	"Noel Joseph Sam M - S2 CSE-B",
	"Anjana Raj - S3 EEE-A",
	"Nikhil M - S2 CE-B",
	"AAAAA - S3 CSE-A",
	"Meenakshi M S - S2 CSE-B",
	"Meenakshi M S - S2 CSE-B",
	"SHEBA ANN VARGHESE - S4 CE-A",
	"Krishnaraj K - S2 CE-A",
	"Jothis jose p - S3 ME-A",
	"devika Menon - S3 ECE-A",
	"krishnanunni mb - S2 CE-A",
	"Aiswarya Sasidharan - S2 ECE-A",
	"arun.c - S2 EIE-A",
	"Vaisakh - S3 CSE-B",
	"Megha G Rao - S4 EEE-A",
	"Sneha Susan John - S2 CE-B",
	"Parvathi S Pradeep - S2 CE-B",
	"Naadeen Abdul Kariem  - S2 CE-B",
	"Maryann Stephen - S2 CE-B",
	"Naadeen Abdul Kariem  - S2 CE-B",
	"Abin ThomAS - S2 EIE-A",
	"Manu Radhakrishnan - S2 MCA-A",
	"Maryann Stephen - S2 CE-B",
	"Sony v b - S4 CE-A",
	"Darwin Davis  - S4 ECE-A",
	"Athira.P.Kumar - S4 ECE-A",
	"Athira.P.Kumar - S4 ECE-A",
	"ANN TREESA JENSON - S4 ECE-A",
	"Krishnanand V - S3 CSE-B",
	"renjith prasad k - S2 ECE-B",
	"Akash p nambiar - S2 ECE-A",
	"Dhiyeri P Joy  - S2 ME-A",
	"Manu joy - S3 EEE-A",
	"Sruthi Saira Reji - S3 ECE-B",
	"Sruthi Saira Reji - S3 ECE-B",
	"SACHIN KOSE PAUL - S3 ECE-B",
	"NIRMAL CHANDRAN - S3 ECE-B",
	"ALINTA ANN WILSON - S2 ECE-A",
	"JOSEPH STANLY - S3 ECE-B",
	"ROHAN ELDHO PAUL - S3 ECE-B",
	"Drishya Glancy - S2 ECE-A",
	"Avinash Prabhakaran - S4 EEE-A",
	"anil - S3 CSE-A",
	"Swetha Krishna  - S2 CE-B",
	"Akhila Nair - S4 ECE-A",
	"SHEBA ANN VARGHESE - S4 CE-A",
	"Kevin Xavier Chakeyath - S4 ECE-B",
	"Susan Maria George - S2 CE-B",
	"Meghna M Manohar  - S2 CE-B",
	"Jayakrishnan.V - S3 ME-A",
	"Sooraj jayachandran - S3 ME-B",
	"Kunjipailo jhony - S3 ME-B",
	"Sooraj Jayachandran - S3 ME-B",
	"anju raj - S3 CE-A",
	"Sivaprasad S - S4 CSE-B",
	"Nithu Rose Malekunnel & Team",
	"Ludi Joy & Team",
	"Meghna M Manohar & Team",
	"Anju Augustine & Team",
	"vaisakh s & Team",
	"KRISHNANAND V & Team",
	"KRISHNANAND V & Team",
	"Bennet Joy Ebraham & Team",
	"Lavanyasree S & Team",
	"Sreelakshmi Unnikrishnan & Team",
	"Arish Ranjan & Team",
	"Ajil Mathews & Team",
	"Ashish johnson  & Team",
	"Arjun A & Team",
	"Alvin George & Team",
	"suryakanth k r & Team",
	"Anjana Shaju & Team",
	"Ananth Venugopal & Team",
	"Ananth Venugopal & Team",
	"Jerin v kurian & Team",
	"PRANAV VISWAM & Team",
	"HARINADH B & Team",
	"KUNJIPAILO & Team",
	"Anjuna & Team",
	"Gowri gopinath & Team",
	"Arathi biju & Team",
	"Visakh ajith  & Team",
	"sreelakshmi K.A & Team",
	"Amritha Gagarin & Team",
	"vinayak G Krishna & Team",
	"vinayak G Krishna & Team",
	"vinayak G Krishna & Team",
	"Reshma K Menon & Team",
	"Reshma R Shenoy & Team",
	"KIRAN JOSEPH & Team",
	"Swetha Krishna B & Team",
	"sreerag s & Team",
	"Anna Maria Thomas & Team",
	"Sriram Sankar & Team",
	"Krishna & Team",
	"krishna & Team",
	"Vignesh Baiju & Team",
	"GOURI PRIYA JYOTHI. L & Team",
	"Albin Benny & Team",
	"Riya Alex & Team",
	"reshma rajan & Team",
	"sooraj suresh & Team",
	"Sooraj suresh & Team",
	"Arish Ranjan & Team",
	"Arish Ranjan & Team",
	"Vishnu prasad & Team",
	"Yedukrishnan PN & Team",
	"DEEPAK.G.ANIL & Team",
	"jaseem ali  & Team",
	"Nimisha benoy & Team",
	"madhurya P & Team",
	"MADHURYA P & Team",
	"Ann Esther Joy & Team",
	"Anju Augustine & Team",
	"Aishwarya Lakshmi Pradeep & Team",
	"Prameela Pradeep & Team",
	"Ponnu kurian & Team",
	"Sruthi Saira Reji & Team",
	"Sruthi Saira Reji & Team",
	"Ananthu S Nair & Team",
	"Lakshmipriya N.J & Team",
	"Muhammed Said & Team",
	"Vyshnav & Team",
	"Noel Joseph Sam M & Team",
	"R.G Vaishak & Team",
	"Neeraj Pm & Team",
	"R.G Vaishak & Team",
	"Ebin Thomas & Team",
	"Ajilan Nujoom & Team",
	"Boniface Iyeppu & Team",
	"Anand Paul & Team",
	"Kiran Thankachan & Team",
	"Kiran Thankachan & Team",
	"R.G Vaishak & Team",
	"Sarath & Team",
	"Aishwarya Lakshmi Pradeep & Team",
	"eleina jose & Team",
	"sreelakshmi K.A & Team",
	"THEERDHA RAJ & Team"
    ];
    $( "#First_Name_1" ).autocomplete({
      source: availableTags
    });

    $( "#First_Name_2" ).autocomplete({
      source: availableTags
    });

    $( "#First_Name_3" ).autocomplete({
      source: availableTags
    });

    $( "#Second_Name_1" ).autocomplete({
      source: availableTags
    });

    $( "#Second_Name_2" ).autocomplete({
      source: availableTags
    });

    $( "#Second_Name_3" ).autocomplete({
      source: availableTags
    });

    $( "#Third_Name_1" ).autocomplete({
      source: availableTags
    });

    $( "#Third_Name_2" ).autocomplete({
      source: availableTags
    });

    $( "#Third_Name_3" ).autocomplete({
      source: availableTags
    });

  });
  </script>
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
		<form name="user" enctype="multipart/form-data" action="ResultUpdation.php" method="POST">
		<div style="font-size:20px">Event : <input style="font-size:20px" type="text" id="event" name="event" autofocus/></div>
		<table style="width:80%" align="center">

<tr bgcolor="#696969">
  <th colspan="2"><font color="white">First</font></th>
</tr>
<tr>
  <td align="center" width="75%"><label>Name & Class : </label><input style="font-size:20px" type="text" id="First_Name_1" name="First_Name_1" maxlength="100" size="25"/></td>
  
</tr>
<tr>
  <td align="center"><label>Name & Class : </label><input style="font-size:20px" type="text" id="First_Name_2" name="First_Name_2" maxlength="100" size="25"/></td>
  
</tr>
<tr>
  <td align="center"><label>Name & Class : </label><input style="font-size:20px" type="text" id="First_Name_3" name="First_Name_3" maxlength="100" size="25"/></td>
  
</tr>
<tr bgcolor="#696969">
  <th colspan="2"><font color="white">Second</font></th>
</tr>
<tr>
  <td align="center"><label>Name & Class : </label><input style="font-size:20px" type="text" id="Second_Name_1" name="Second_Name_1" maxlength="100" size="25"/></td>
  
</tr>
<tr>
  <td align="center"><label>Name & Class : </label><input style="font-size:20px" type="text" id="Second_Name_2" name="Second_Name_2" maxlength="100" size="25"/></td>
  
</tr>
<tr>
  <td align="center"><label>Name & Class : </label><input style="font-size:20px" type="text" id="Second_Name_3" name="Second_Name_3" maxlength="100" size="25"/></td>
  
</tr>
<tr bgcolor="#696969">
  <th colspan="2"><font color="white">Third</font></th>
</tr>
<tr>
  <td align="center"><label>Name & Class : </label><input style="font-size:20px" type="text" id="Third_Name_1" name="Third_Name_1" maxlength="100" size="25"/></td>
  
</tr>
<tr>
  <td align="center"><label>Name & Class : </label><input style="font-size:20px" type="text" id="Third_Name_2" name="Third_Name_2" maxlength="100" size="25"/></td>
  
</tr>
<tr>
  <td align="center"><label>Name & Class : </label><input style="font-size:20px" type="text" id="Third_Name_3" name="Third_Name_3" maxlength="100" size="25"/></td>
  
</tr>
</table>
<input  style="font-size:20px ; align:center" type="submit" name="Submit" value="UPDATE"/>

</form>
	</body>
</html>
