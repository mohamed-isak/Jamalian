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
<div class="settings_background">

	<p><a href="settings.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></p>

	</div>

<!--*****************body********************************** -->
<div id="wraper">
	

<div class="alog">
 
<?php 

if (isset($_POST['submit'])) {
    $to = "mitrichy2000@gmail.com";
    $subject = $_POST['name'];
    $message = "message";
    $from = $_POST['email'] ;
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>
<center>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="text" name="name" placeholder="Enter your name" class="pass" bid="OPASS" required><br>
<input type="mail" name="email" placeholder="Enter your mail id" class="pass" bid="OPASS" required><br>
<textarea  class="textarea" name="message" placeholder="send your feedback our devlopers"   required></textarea>
<button type="submit" name="submit" class="btn2">Send</button>
</form>

</center>
</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>