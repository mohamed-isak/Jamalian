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
	<meta http-equiv="refresh" content="">


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
 
<?php
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
if (isset($_POST["submit"])) 
{

$sql="insert into request(ID,MES,LOGS) values ({$_SESSION["ID"]},'{$_POST["message"]}','{$currentTime}')";
$conn->query($sql);
echo "<div class='success'>Request send admin</div>";	
}

?>

<center>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


<textarea  class="textarea" name="message" placeholder="Send Your request to professors"   required></textarea>
<button type="submit" name="submit" class="btn2">Send</button>
</form>

</center>
</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>