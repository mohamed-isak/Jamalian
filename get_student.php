<?php
require_once("db.php");
session_start();

?>
 
<!DOCTYPE html>
<html>
<head>
	<!-----------------------meta tags------------------->
	 <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta http-equiv="refresh" content="">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
	<title>Web design</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
margin-top:;
width:auto;
}
button{
position:fixed;
left:1%;
top:2%;
background-color:red;
width:30%;
height:5%;
}
div.profile_background h4{
font-size:24px;
margin:10% 0 0 0 ;
padding:10% 0 0 0;
}
</style>

</head>
<?php

if(!empty($_POST["student_id"]) ) 
{

$id=($_POST["student_id"]);

$query =mysqli_query($conn,"SELECT * FROM profile WHERE pid = '" . $id . "' ");
?>
 
<body>
<center>
<div class="container" >
	


<!--*****************body********************************** -->

<?php
while($row=mysqli_fetch_array($query))  
{

?>
<div class="profile_background">
        
        <h4>Profile</h4>
		<img src="<?php echo $row["img"];?>"  onerror="this.src='img/default.jpg'" class="profile">

	</div>


    <div style="margin:10%  0;">
    <center><h3><?php echo $row["uname"];?></h3></center>
     </div>


       <div class="ulocation" >
     	 
    <i class="fa fa-map-marker" aria-hidden="true"></i><center><p>&nbsp;&nbsp;<?php echo $row["location"];?></p></center>
     </div>
     
       <div class="ubirdth">
         <?php if($row["dob"]){ $dob=$row["dob"]; 
          $dateFormat=date( 'd-F-Y ', strtotime($dob) );

?>
		 <i class="fa fa-birthday-cake" aria-hidden="true"></i><center><p>&nbsp;&nbsp;<?php echo $dateFormat;}?></p></center>
     </div>
  
 
             <div class="ublog">
     	
       <i class="fa fa-info-circle" aria-hidden="true"></i><center><p>&nbsp;&nbsp;<?php echo $row["bio"];?></p></center>
     </div>
     
<?php
}
}
?>
	
     
 

<!--******************** Footer side***************************--->

</div>
</center>

</body>
</html>