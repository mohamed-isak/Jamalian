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
	<meta http-equiv="refresh" content="120">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
	<title>Web design</title>

<link rel="stylesheet" href="css/style.css">
 <script type="text/javascript">
        function blockSpecialChar(e) {
            var k = e.keyCode;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8    || (k >= 48 && k <= 57));

        }
        

    </script>

</head>
<body>

<div class="container">
	<!--********************** slidebar******************************-->
<a href="alogin.php"><img class="logo_jamalian_new" src="img/logo.png"></a>


<!--*****************body********************************** -->
<div id="wraper">
	

<div class="alog">
 
<?php

date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
if (isset($_POST["submit"])) 
{
    $qr="select * from student where RNO='{$_POST["rno"]}'";
    $ex=mysqli_query($conn,$qr);
    $data=mysqli_fetch_assoc($ex);
    if(!$data){
          $sql="INSERT INTO student (NAME,UNAME,PASS,MAIL,DEP,RNO,TIME) VALUES ('{$_POST["name"]}','{$_POST["uname"]}',md5('{$_POST["pass"]}'),'{$_POST["mail"]}','{$_POST["dep"]}','{$_POST["rno"]}','{$currentTime}')";
  $conn->query($sql);
  echo "<div class='success'>User registration  success</div>";
  echo "<script>window.open('index.php','_self')</script>";
    }else{
        echo "<div class='error'>This Roll Number Is Aldready Registered </div>";
    }

 
}
?>
 

<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 <input type="text" name="name" placeholder="Name" class="pass" onkeypress="return blockSpecialChar(event)"  pattern=".{5,15}" required  title="Min 5 Max 15" required><br>
<input type="text" name="uname" placeholder="Userame" class="pass"  pattern=".{5,15}" required  title="Min 5 Max 15"required><br>

<input type="Password" name="pass" placeholder="Password"  pattern=".{5,10}" required title="Min 5 Max 10" class="pass"><br>

<input type="email" name="mail" placeholder="Mail Id" required class="pass"><br>
<select class="pass" required name="dep">
	<option value="I bsc">I Bsc</option></option>
   	<option value="II bsc">II Bsc</option></option>
   	<option value="III bsc">III Bsc</option></option>
    
</select></br>
<input type="text" name="rno" placeholder="Roll Number" pattern=".{8}" onkeypress="return blockSpecialChar(event)" required  required  title="Enter Correct Roll Number" class="pass">

 
 
 
<button type="submit" name="submit" class="btn2">Register Now</button><p style="text-align:center;font-size: 4vw">Already have an account?&nbsp;&nbsp;<b><a href="index.php">Login</a></b></p>
</form>


</div>

</div>


<!--******************** Footer side***************************--->

</div>


</body>
</html>