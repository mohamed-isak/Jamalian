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
	<meta http-equiv="refresh" content="30">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
	<title>Web design</title>

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

$sql="SELECT student.NAME,request.MES,request.LOGS from student inner join request on student.ID=request.ID order by RID desc";
$res=$conn->query($sql);
if ($res->num_rows>0) 
{
 
    while ($row=$res->fetch_assoc()) 
    {
    	 	
    echo "<img class='cuser' src='img/create_admin.png' >"; 
    echo "<span class='cname'>{$row["NAME"]}</span>";
      echo "<span style='float:right;display:inline-block;font-size:12px;margin:4% 2%;'>{$row["LOGS"]}</span><br>";
     echo "<span class='cmsg' style='float:left;margin:4% 3%;text-align:justify;font-size:15px;' >{$row["MES"]}</span></br></br>";

    echo "<hr class='coment_bar'>";
    }
    



 
}
else{
	echo "<div class='error'>No request records found</div>";
}

?>


</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>