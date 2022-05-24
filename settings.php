<?php
include "db.php";
session_start();
if(!isset($_SESSION['ID']))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}	
		$sql="select * from student where ID={$_SESSION["ID"]}";
	$ex=mysqli_query($conn,$sql);
	$trv=mysqli_fetch_assoc($ex);
?>

<!DOCTYPE html>
<html>
<head>
		<!-----------------------meta tags------------------->
	 <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no" />



	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
	<title>Web design</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="swiper/swiper.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
	


<!--*****************body********************************** -->
<div class="settings_background">
   <a href="uhome.php" style="float:left;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
	<p style="float:right;margin:27px 23px 0px 1px">Settings</p>

	</div>
	<ul class="set_nav">

	<li><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="edit_profile.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit profile</a></li><hr>
		<li><i class="fa fa-key" aria-hidden="true"></i><a href="uchangepass.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Change Password</a></li><hr>
			<li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="feedback.php">&nbsp;&nbsp;&nbsp;&nbsp;Feed Back</a></li><hr>
     <li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="logout.php"  id="logout">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a> <i class="entypo-logout right"></i></li><hr>
</ul>
	<div>
  
<!--******************** Footer side***************************--->

</div>
<script>
    $('a#logout').on('click', function () {

                        var isConfirmed = $.confirm({
                            title: 'Logout Confirmation',
                            content: 'Are you sure you want to logout?',
                            buttons: {
                                confirm: function () {
                                    // $.alert('Confirmed!');
                                   return true;
                                },
                                cancel: function () {
                                    // $.alert('Canceled!');
                                    return false;
                                },
                            }
                        });

                        if(isConfirmed == true){
                            window.location.href="extra-login.html";
                        }

                    });
</script>

</body>
</html>