<?php
include "db.php";
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
	<meta http-equiv="refresh" content="">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
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

  $sql="INSERT INTO admin (ANAME,APASS) VALUES ('{$_POST["name"]}',md5('{$_POST["pass"]}'))";
  $conn->query($sql);
  echo "<div class='success'>Admin Creation  successfully</div>";
}
?>


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="change_pass_form">
 
<input type="text" name="name" placeholder="User Name" class="pass" pattern=".{5,15}" required  title="Min 5 Max 15" required><br>

<input type="Password" name="pass" placeholder="Password" pattern=".{5,10}" required title="Min 5 Max 10" class="pass"><br>

<br>


<button type="submit" name="submit" class="btn2">Create Admin</button>
</form>


</div>

</div>


<!--******************** Footer side***************************--->

</div>


</body>
</html>