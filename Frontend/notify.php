
<?php


$con = mysqli_connect('localhost','dbusername','dbpassword','dbname');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$stack = array();



mysqli_select_db($con,"ajax_demo");
$sql="SELECT message,timestampdiff(minute,time,now()) as time FROM notification  order by priority desc ";
$result = mysqli_query($con,$sql);
$item="";

while($row = mysqli_fetch_array($result)) {
    
		$item=$item."<li class=\"list-group-item\">
             <p>".$row['message']."</p>
           <small class=\"block text-muted\"> ".$row['time']." minuts ago</small>
		   </li> ";
          
}
array_push($stack,$item);


$item="";



$sql="SELECT * FROM events where stage='stage1' and now_next='now' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


   
		
         $item=$item."<span class=\"label text-base bg-warning pos-rlt m-r\"><i class=\"arrow right arrow-warning\"></i>now</span>".$row['event'];
         
        
          }

array_push($stack,$item);

$item="";



$sql="SELECT * FROM events where stage='stage2' and now_next='now' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


   
		
         $item=$item."<span class=\"label text-base bg-warning pos-rlt m-r\"><i class=\"arrow right arrow-warning\"></i>now</span>".$row['event'];
         
        
          }

array_push($stack,$item);

$item="";



$sql="SELECT * FROM events where stage='stage3' and now_next='now' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


   
		
         $item=$item."<span class=\"label text-base bg-warning pos-rlt m-r\"><i class=\"arrow right arrow-warning\"></i>now</span>".$row['event'];
         
        
          }

array_push($stack,$item);
$item="";



$sql="SELECT * FROM events where stage='stage4' and now_next='now' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


   
		
         $item=$item."<span class=\"label text-base bg-warning pos-rlt m-r\"><i class=\"arrow right arrow-warning\"></i>now</span>".$row['event'];
         
        
          }

array_push($stack,$item);
$item="";



$sql="SELECT * FROM events where stage='stage1' and now_next='next' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


   
		
         $item=$item."<span class=\"label text-base bg-info pos-rlt m-r\"><i class=\"arrow right arrow-info\"></i>next</span>".$row['event'];
         
        
          }

array_push($stack,$item);

$item="";



$sql="SELECT * FROM events where stage='stage2' and now_next='next' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


   
		
         $item=$item."<span class=\"label text-base bg-info pos-rlt m-r\"><i class=\"arrow right arrow-info\"></i>next</span>".$row['event'];
         
        
          }

array_push($stack,$item);

$item="";



$sql="SELECT * FROM events where stage='stage3' and now_next='next' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


   
		
         $item=$item."<span class=\"label text-base bg-info pos-rlt m-r\"><i class=\"arrow right arrow-info\"></i>next</span>".$row['event'];
         
        
          }

array_push($stack,$item);
$item="";



$sql="SELECT * FROM events where stage='stage4' and now_next='next' ";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {


   
		
         $item=$item."<span class=\"label text-base bg-info pos-rlt m-r\"><i class=\"arrow right arrow-info\"></i>next</span>".$row['event'];
         
        
          }
array_push($stack,$item);
$sql="SELECT * FROM dedication ";
$result = mysqli_query($con,$sql);
$item="";

while($row = mysqli_fetch_array($result)) {
    
		$item=$item." # ".$row['message'];
          
}
array_push($stack,$item);
$sql="SELECT * FROM radio ";
$result = mysqli_query($con,$sql);
$item="<span class=\"label text-base bg-danger pos-rlt m-r\">FISAT RADIO UPDATES</span>";

while($row = mysqli_fetch_array($result)) {
    
		$item=$item." # ".$row['liveup'];
          
}

array_push($stack,$item);
$sql="SELECT * FROM results ";
$result = mysqli_query($con,$sql);
$item="";

while($row = mysqli_fetch_array($result)) {
    
		$item=$item." <div class=\"slide\">
				<h4>".$row['event']."</h4>
				<p>1.".$row['First_name_1']."</br>
				2.".$row['Second_name_1']."</br>
				3.".$row['Third_name_1']."</br></p></div>";
          
}
array_push($stack,$item);

$sql="SELECT * FROM results order by time desc LIMIT 0,3 ";
$result = mysqli_query($con,$sql);
$item="";

while($row = mysqli_fetch_array($result)) {
    
		$item=$item." <li>
				<h3>".$row['event']."</h3>
				<p>1.".$row['First_name_1']."</br>
				2.".$row['Second_name_1']."</br>
				3.".$row['Third_name_1']."</br></p></li>";
          
}
array_push($stack,$item);

echo json_encode($stack);
mysqli_close($con);
?>
