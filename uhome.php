<?php
include "db.php";
session_start();
if(!isset($_SESSION['ID']))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
<head>

	<title>Web design</title>
	<!-----------------------meta tags------------------->
	 <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta http-equiv="refresh" content="30">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="preloader>

<div> id="status">&nbsp;</div>
    
</div>
<div class="container">
	
<!--********************** slidebar******************************-->
<div id="nav-bar">
	
<?php
 include "usersidebar.php" 
?>
</div>
<!--*****************body********************************** -->
<?php 
$qr="select * from post order by pid desc ";
$ex=mysqli_query($conn,$qr); if(!$ex){ echo "<center><h1 style='margin-top:20%'>No Posts</h1></center>";}
while($trv=mysqli_fetch_assoc($ex))
{
     
	echo "<div class='userdetail'><img class='cusers' src='img/create_admin.png'  ><h5 class='post_name'>{$trv["aid"]}</h5>";
    echo "<p class='post_date'>{$trv["date"]}</p></div>";	

	echo "<img class='newsfeed' src='{$trv["file"]}' onerror='this.src='img/default.jpg''>";
	echo "<center> <p class='post_discription'>{$trv["discription"]} </p></center>";
	
    echo "<hr>";
}


?>



<!--******************** Footer side***************************--->

</div>
<script>
$(document).ready(function()
{
$(window).on.('load',function()
{
$('#status').fadeOut();
$('#preloader').delay(350).fadeOut('slow');
})
});
</script>

</body>
</html>