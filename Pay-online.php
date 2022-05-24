<?php
include "db.php";
session_start();
if(!isset($_SESSION['ID']))
	{
		echo"<script>window.open('ulogin.php?mes=Access Denied..','_self');</script>";
		
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
     hr{
         display:none;
     }
 </style>
<body>

<div class="container">
	
<!--********************** slidebar******************************-->
<div id="nav-bar">
  
<?php
 include "usersidebar.php"
?>
</div>
<!--*****************body********************************** -->
<div id="wraper">
	
<h5 class="technical">Technical_Events</h5>
<h5 class="technical">Pay your fee</h5>
<div class="alog">

<div class="ppt">
<button class="togle">
Under-Graduate</button>
<div class="content">
    
 

<a style="text-decoration:none;font-size:20px;margin:2% 4%;color:white;background-color:black;padding:5px;" href="http://www.jmconline.in/onlinepayment/">Get Link</a>
</div>
</div>
<div class="deb">
<button id="2"  class="togle">
Post-Graduate</button>

<div  class="content">
    
 

<a style="text-decoration:none;font-size:20px;margin:2% 4%;color:white;background-color:black;padding:5px;" href="http://www.jmconline.in/onlinepayment/">Get Link</a>
</div>
</div>
<div class="web">
<button id="3" class="togle">
 M.PHIL</button>

<div class="content" >
   
 <a style="text-decoration:none;font-size:20px;margin:2% 4%;color:white;background-color:black;padding:5px;" href="http://www.jmconline.in/onlinepayment/">Get Link</a>
</div>
</div>

<div class="quiz">
<button id="4" class="togle">
PH.D</button>


<div id="Demo4" class="content">
  

 <a style="text-decoration:none;font-size:20px;margin:2% 4%;color:white;background-color:black;padding:5px;" href="http://www.jmconline.in/onlinepayment/">Get Link</a>
</div>
</div>




</div>




<!--******************** Footer side***************************--->

</div>
<script src="css/jquery-3.3.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".content").hide();
 });
$(".ppt button").click(function(){
 $(".ppt .content").slideToggle(500);
$(".mul .content").slideUp();
  $(".deb .content").slideUp();
   $(".web .content").slideUp();
    $(".quiz .content").slideUp();
});
 $(".deb button").click(function(){
 $(".deb .content").slideToggle(500);
$(".ppt .content").slideUp();
  $(".mul .content").slideUp();
   $(".web .content").slideUp();
    $(".quiz .content").slideUp();
});
 $(".web button").click(function(){
 $(".web .content").slideToggle(500);
 $(".ppt .content").slideUp();
  $(".deb .content").slideUp();
   $(".mul .content").slideUp();
    $(".quiz .content").slideUp();
});
 $(".quiz button").click(function(){
 $(".quiz .content").slideToggle(500);
 $(".ppt .content").slideUp();
  $(".deb .content").slideUp();
   $(".web .content").slideUp();
    $(".mul .content").slideUp();
});
 $(".mul button").click(function(){
 $(".mul .content").slideToggle(500);
 $(".ppt .content").slideUp();
  $(".deb .content").slideUp();
   $(".web .content").slideUp();
    $(".quiz .content").slideUp();
});

$(".ppt1 button").click(function(){
 $(".ppt1 .content").slideToggle(500);
$(".mul1 .content").slideUp();
  $(".deb1 .content").slideUp();
   $(".web1 .content").slideUp();
    $(".quiz1 .content").slideUp();
});
 $(".deb1 button").click(function(){
 $(".deb1 .content").slideToggle(500);
$(".ppt1 .content").slideUp();
  $(".mul1 .content").slideUp();
   $(".web1 .content").slideUp();
    $(".quiz1 .content").slideUp();
});
 $(".web1 button").click(function(){
 $(".web1 .content").slideToggle(500);
 $(".ppt1 .content").slideUp();
  $(".deb1 .content").slideUp();
   $(".mul1 .content").slideUp();
    $(".quiz1 .content").slideUp();
});
 $(".quiz1 button").click(function(){
 $(".quiz1 .content").slideToggle(500);
 $(".ppt1 .content").slideUp();
  $(".deb1 .content").slideUp();
   $(".web1 .content").slideUp();
    $(".mul1 .content").slideUp();
});
 $(".mul1 button").click(function(){
 $(".mul1 .content").slideToggle(500);
 $(".ppt1 .content").slideUp();
  $(".deb1 .content").slideUp();
   $(".web1 .content").slideUp();
    $(".quiz1 .content").slideUp();
});
</script>
</body>

</html>