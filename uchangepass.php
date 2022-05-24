<?php
include "db.php";
session_start();

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
<div class="settings_background">
   <a href="uhome.php" style="float:left;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
	

	</div>

<!--*****************body********************************** -->
<div id="wraper">
	

<div class="alog">
 
<?php

if (isset($_POST["submit"])) 
{

$sql="SELECT * from student WHERE PASS='{$_POST["opass"]}'and ID='{$_SESSION["ID"]}'"  ;
$res=$conn->query($sql);
if ($res->num_rows>0)
 {
  $s="update student set PASS='{$_POST["npass"]}' WHERE ID=".$_SESSION["ID"];
  $conn->query($s);
  echo "<div class='success'>password change success</div>";	
}
else{

  echo "<div class='error'>Invalid password</div>";
}

}

?>


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

<input type="password" name="opass" placeholder="Old Password" class="pass" bid="OPASS" required><br>

<input type="password" name="npass" placeholder="New Password"  pattern=".{5}" required  title="Min 5 Max 15" class="pass" bid="NPASS" required>
<button type="submit" name="submit" class="btn2">Change Now</button>
</form>


</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>