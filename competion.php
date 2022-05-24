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
<div class="alog">

<div class="ppt">
<button class="togle">
PPT</button>
<div class="content">
    <img src="img/competition/ppt.jpg" >
 <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Eg: Power Point</a>
</div>
</div>
<div class="deb">
<button id="2"  class="togle">
DEBUGGING</button>

<div  class="content">
    <img src="img/competition/debug.jpg" >
  <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
</div>
</div>
<div class="web">
<button id="3" class="togle">
 WEB DESIGNING</button>

<div class="content" >
    <img src="img/competition/web.png" >
  <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
</div>
</div>

<div class="quiz">
<button id="4" class="togle">
QUIZ</button>


<div id="Demo4" class="content">
    <img src="img/competition/quiz.jpg" >
 <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
</div>
</div>
<div class="mul">
<button id="5" class="togle">
MULTIMEDIA</button>


<div id="Demo5" class="content">
    <img src="img/competition/multimedia.jpg" >
  <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
</div>

</div>



<h5 class="technical">NonTechnical_Events</h5>

<div class="ppt1">
<button class="togle">ADD-ZAP</button>
<div class="content">
    <img src="img/competition/adzap.jpg" >
 <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
</div>
</div>
<div class="deb1">
<button id="2"  class="togle">
JUST A MINUTE</button>

<div  class="content">
    <img src="img/competition/just.jpg" >
 <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
</div>
</div>
<div class="web1">
<button id="3" class="togle">
 STRESS  MANAGEMENT</button>

<div class="content" >
    <img src="img/competition/stress.jpg" >
 <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
</div>
</div>

<div class="quiz1">
<button id="4" class="togle">
MEME CREATION</button>


<div id="Demo4" class="content">
    <img src="img/competition/meme.jpg" >
 <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
</div>
</div>
<div class="mul1">
<button id="5" class="togle">
TREASURE HUNT</button>


<div id="Demo5" class="content">
    <img src="img/competition/hunt.jpg" >
  <p style="font-size:15px;text-aling:justify;margin:3% 4%;color:#123;">"No audience ever complained about a presentation or speech being too short". - Do you have the skill of presenting your stuff ?</p>
 <h5 style="font-size:15px;margin:2% 4%;color:#123;">contact:+91-9999-99999</h5>
 <a style="text-decoration:none;font-size:15px;margin:2% 4%;color:#123;" href="https://drive.google.com/open?id=1dgoMtpiskGg9Pc-DWHRZ3lIWE212mb56">Powerpoint</a>
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