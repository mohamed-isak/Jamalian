<?php
include "db.php";
session_start();
function countRecord($sql,$conn)
{
	$res=$conn->query($sql);
	return $res->num_rows;
}
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
	<meta http-equiv="refresh" content="30">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
	<title>Web design</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<style>
.btn2{
 margin:1% 1%;
 color:#eee;
background-color:#911;
display:inline-block;
}
body{

margin-top:20%;
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

<!--*****************upload and delete post ********************************** -->
<?php
$adminid=$_SESSION["ANAME"];
if(isset($_POST["delete"])){
$id=$_POST["delete"];
 $qr1="select * from post where aid='$adminid' and pid=$id";
$ex1=mysqli_query($conn,$qr1);
$trv1=mysqli_fetch_assoc($ex1);
    $Data_in_file=$trv1["file"];
 if(file_exists($Data_in_file)){
// get the path of the file to want delete 
  unlink("$Data_in_file"); //delete the file
 } else{
echo "<script>alert('Access Denied File Not Found')</script>";
 }
 
 $sql="delete from post where pid=$id";
 $execute=mysqli_query($conn,$sql);
   if($execute){
      echo "<div class='success' style='margin:20% 0 -3% 0 ;' >Record Successfully Deleted</div>";
  }
}
?>
<?php
if(isset($_POST["edit"])){
  echo "<script>alert('Access Denied')</script>";
}
?>

<!--*****************body********************************** -->
<?php 
$adminid=$_SESSION["ANAME"];
 
$qr="select * from post where aid='$adminid' order by pid desc ";
$ex=mysqli_query($conn,$qr);
while($trv=mysqli_fetch_assoc($ex))
{
     
	echo "<div class='userdetail'><img class='cusers' src='img/create_admin.png' ><h5 class='post_name'>{$trv["aid"]}</h5>";
    echo "<p class='post_date'>{$trv["date"]}</p></div>";	

	echo "<img class='newsfeed' src='{$trv["file"]}'>";
	echo "<center> <p class='post_discription'>{$trv["discription"]} </p></center>";
?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post'>
               <div style='width:100%;'>
                <button  name="edit" class='btn2' value="<?php echo $trv["pid"];?>">Edit Post</button>
	       <button  name="delete" class='btn2' value="<?php echo $trv["pid"];?>">Delete Post</button>
               </div>
        </form>
<?php
    echo "<hr>";
}


?>


<div id="wraper">

<div class="alog">
 
<ul class="record">
	<li>Total&nbsp;Student:&nbsp;&nbsp;&nbsp;&nbsp;<div class="num"><?php echo countRecord("select * from student",$conn);?></div></li>
	<li>Total&nbsp;Books:&nbsp;&nbsp;&nbsp;&nbsp;<div class="num"><?php echo countRecord("select * from book",$conn);?></div></li>
	<li>Total&nbsp;Request:&nbsp;&nbsp;&nbsp;&nbsp;<div class="num"><?php echo countRecord("select * from request",$conn);?></div></li>
	
	
</ul>


</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>