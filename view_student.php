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
<table>
      <tr class="first_row">
     <th>SNO</th>
     <th>NAME</th>
     
     <th>DEPARTMENT</th>
      </tr>
      
<?php 

$sql="SELECT * FROM student";
$res=$conn->query($sql);
if ($res->num_rows>0) 
{

    $i=0;
    while ($row=$res->fetch_assoc()) 
    {
    	$i++;
    	echo "<tr>";
    	
       echo "<td>{$i}</td>";
       echo "<td>{$row["NAME"]}</td>";
     
       echo "<td>{$row["DEP"]}</td>";
   

    	echo "</tr>";
    	
    }
?>
     

</table>
<?php
}
else{
	echo "<div class='error'>No students records found</div>";
}

?>


</div>

</div>



<!--******************** Footer side***************************--->

</div>


</body>
</html>