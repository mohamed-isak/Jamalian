<?php
include "db.php";
session_start();
if(!isset($_SESSION['AID']))
	{
		echo"<script>window.open('alogin.php?mes=Access Denied..','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
<head>
 	<!-----------------------meta tags------------------->
	 <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta http-equiv="refresh" content="30">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
	<title>Web design</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>

<div class="container">
	<!--********************** slidebar******************************-->
<div id="nav-bar">
	
<?php
 include "admin_navbar.php" 
?>
</div>

<!--*****************body********************************** -->
<div id="wraper">
	

<div class="alog">
 
<?php

if (isset($_POST["submit"])) 
{

$sql="SELECT * from admin WHERE APASS='{$_POST["opass"]}'and AID='{$_SESSION["AID"]}'"  ;
$res=$conn->query($sql);
if ($res->num_rows>0)
 {
  $s="update admin set APASS='{$_POST["npass"]}' WHERE AID=".$_SESSION["AID"];
  $conn->query($s);
  echo "<div class='success'>password change success</div>";
}
else{

  echo "<div class='error'>Invalid password</div>";
}

}

?>


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="change_pass_form">
<input type="password" placeholder="Old Password"  name="opass" class="pass" bid="OPASS" required><br>

<input type="password" placeholder="New Password"  pattern=".{5}"  required  title="Min 5 Max 15"  name="npass" class="pass" bid="NPASS" required>
<button type="submit" name="submit" class="btn2">Change Now</button>
</form>


</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>