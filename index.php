<?php
include "db.php";
session_start();
if(isset($_SESSION["NAME"])){
    echo "<script>window.open('uhome.php','_self')</script>";
    $userofidex=1;
}
if(isset($_SESSION["NAME"])&& $userofindex==1){
     echo "<script>window.open('uhome.php','_self')</script>";
     
}
?>

<!DOCTYPE html>
<html>
<head>
	<!-----------------------meta tags------------------->
	 <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta http-equiv="refresh" content="120">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
	<title>Jamalian</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
<div class="container">
	<!--********************** slidebar******************************-->
<a href="alogin.php"><img class="logo_jamalian" src="img/logo.png"></a>
<!--*****************body********************************** -->
<div id="wraper">
	
<!--<h3>User Login Here</h3>-->
<div class="alog">
 <?php
				if(isset($_POST["submit"]))
				{
					$sql="select * from student where UNAME='{$_POST["uname"]}' and PASS=md5('{$_POST["upass"]}')";
					$res=$conn->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION['ID']=$ro['ID'];
						$_SESSION['NAME']=$ro['UNAME'];
						echo "<script>window.open('uhome.php','_self');</script>";
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
	
<input type="text" name="uname" placeholder="Username" class="name"  required><br>

<input type="password" name="upass" placeholder="Password" class="pass"  required>
<button type="submit" name="submit" class="btn2">Log In</button><p style="text-align:center;font-size: 4vw">Don't have an account?&nbsp;&nbsp;<b><a href="new.php">Sign Up</a></b></p>
</form>
</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>