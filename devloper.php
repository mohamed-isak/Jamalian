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
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
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

<div class="container">
	
<!--********************** slidebar******************************-->
<div id="nav-bar">
  
<?php
 include "usersidebar.php" 
?>
</div>
<!--*****************body********************************** -->
<div id="wraper">
	
 
<div class="alog">
<div class="devloper_back">
	

</div>
<div class="prof" style="background-image:url(img/isak.jpg)">

</div>
</div>
<h5  class="devloper_blog">Mohamed Isak</h5>
<h5  class="devloper_content">III B.Sc(C.S)</h5>
<h5  class="devloper_content">Devloper & Designer</h5>


<div class="devloper_back2">
	

</div>
<div  class="prof" style="background-image:url(img/prof_2.jpg)"></div>
<h5  class="devloper_blog">Naina Mohamed</h5>
<h5  class="devloper_content">III B.Sc(C.S)</h5>
<h5  class="devloper_content">Devloper & Designer</h5>

</div>

 


<!--******************** Footer side***************************--->

</div>


</body>
</html>