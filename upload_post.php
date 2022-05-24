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



	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
	<title>Web design</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<style>
    input[type="file"] {
    display: none;
}

.custom-file-upload {
background-size:cover;
background-position:center;
 margin-bottom:1%;
height:100px;
    border: 1px solid #ccc;
    display: inline-block;
    padding: 8px 12px;
    cursor: pointer;
}
</style>
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
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
 

if (isset($_POST["submit"])) 
{
$target_dir="upload/post/";
$target_file=$target_dir.basename($_FILES["efile"]["name"]);
if (move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file)) 
{
  $sql="insert into post(file,discription,date,aid) values ('{$target_file}','{$_POST["Discription"]}','{$currentTime}','{$_SESSION["ANAME"]}')";
  $conn->query($sql);
  echo "<div class='Book uploaded success'></div>";
}
else
{
  echo "File Not uploaded";
}

}

?>


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="change_pass_form">
   <label class="custom-file-upload"  style="background-image:url(img/upload.jpg);" for="post">
  
    <input type="file" name="efile" id="post"  />
   <br><br><br><br><br>Upload post
</label><br>
<input type="text" name="Discription" placeholder="Discription" class="name" bid="OPASS" required><br>

<button type="submit" name="submit" class="btn2">Upload Post</button>
</form>

</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>