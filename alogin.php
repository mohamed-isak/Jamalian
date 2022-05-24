<?php

session_start();
include "db.php";
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
</head>
<body>

<div class="container">
	<!--********************** slidebar******************************-->
<a href="index.php"><img class="logo_jamalian" src="img/logo.png"></a>


<!--*****************body********************************** -->
<div id="wraper">
	
<div class="alog">
 <?php
				if(isset($_POST["submit"]))
				{
					$sql="select * from admin where ANAME='{$_POST["aname"]}' and APASS=md5('{$_POST["apass"]}')";
					$res=$conn->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION['AID']=$ro['AID'];
						$_SESSION['ANAME']=$ro['ANAME'];
						echo "<script>window.open('ahome.php','_self');</script>";
					}
					else
					{
						echo "<div class='error'>Invalid Username or Password</div>";
					}
					
				}
				if(isset($_GET["mes"]))
				{
					echo "<div class='error'>{$_GET["mes"]}</div>";
				}
				
			?>


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="login_form">
	
<input type="text" name="aname" placeholder="Name" class="name" id="ANAME" required><br>

<input type="password" name="apass" placeholder="Password" class="pass" bid="APASS" required>
<button type="submit" name="submit" class="btn2">Log In</button>
</form>
</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>