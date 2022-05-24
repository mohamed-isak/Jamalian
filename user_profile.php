<?php
include "db.php";
session_start();
if(!isset($_SESSION['ID']))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}	
		$sql="select * from profile where sid={$_SESSION["ID"]}";
	$ex=mysqli_query($conn,$sql);
	$trv=mysqli_fetch_assoc($ex);
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
</head>
<body>
<center>
<div class="container" >
	


<!--*****************body********************************** -->
	<div class="profile_background">
        
        <h2>Profile</h2>
		<img src="<?php echo $trv["img"];?>"  onerror="this.src='img/default.jpg'" class="profile">

	</div>
	


    <div style="margin:10%  0;">
    <center><h2><?php echo $_SESSION["NAME"];?></h2></center>
     </div>


       <div class="ulocation" >
     	 
    <i class="fa fa-map-marker" aria-hidden="true"></i><center><p>&nbsp;&nbsp;<?php echo $trv["location"];?></p></center>
     </div>
     
       <div class="ubirdth">
       <?php $dob=$trv["dob"]; 
          $dateFormat=date( 'd-F-Y ', strtotime($dob) );

?>
	   <i class="fa fa-birthday-cake" aria-hidden="true"></i><center><p>&nbsp;&nbsp;<?php echo $dateFormat;?></p></center>
     </div>
  
 
             <div class="ublog">
     	
       <i class="fa fa-info-circle" aria-hidden="true"></i><center><p>&nbsp;&nbsp;<?php echo  $trv["bio"] ;?></p></center>
     </div>
     
     
 

<!--******************** Footer side***************************--->

</div>
</center>

</body>
</html>