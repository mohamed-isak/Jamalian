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
	<meta http-equiv="refresh" content="">


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
 
if (isset($_POST["submit"])) 
{
$target_dir="upload/";
$target_file=$target_dir.basename($_FILES["efile"]["name"]);
if (move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file)) 
{
  $sql="insert into book(BTITLE,KEYWORDS,FILE) values ('{$_POST["bname"]}','{$_POST["keys"]}','{$target_file}')";
  $conn->query($sql);
  echo "<div class='Book uploaded success'>
  <script>alert('The Book {$_POST["bname"]} is Successfully updated')</script>
 
</div>";
}
else
{
  echo "File Not uploaded";
}

}

?>


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="change_pass_form">

 <label class="custom-file-upload" for="book">
<i class="fa fa-book" style="font-size:80px;display:inline-block;color:#999;"></i></br>
    Choose Book
</label></br>
<input type="file"  name="efile" id="book" />
    
<input type="text" name="bname" placeholder="Book Title" class="name" bid="OPASS" required><br>

<input type="text" 
name="keys" placeholder="Keywords" class="name"  required><br>

 
<button type="submit" name="submit" class="btn2">Upload Book</button>
</form>

</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>