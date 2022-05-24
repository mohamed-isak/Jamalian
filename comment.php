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
	
<h3>Search Books</h3>
<div class="alog">
 <?php
  $sql="SELECT * FROM book where BID =".$_GET ["id"];
  $res=$conn->query($sql);
  if($res->num_rows>0)
  {
   echo "<table class='table'>";
   $row=$res->fetch_assoc();
   echo "<tr class='trow'>


        <th class='thead'>Book name:</th>
        <td class='tdata'>&nbsp;&nbsp;&nbsp;{$row["BTITLE"]}</td>
        <th class='thead'>&nbsp;&nbsp;key words:</th>
        <td class='tdata'>&nbsp;&nbsp;&nbsp;{$row["KEYWORDS"]}</td>
       
       
 


        </tr>";


   echo "</table>";
  }
 ?>



<form  action="<?php echo $_SERVER["REQUEST_URI"];?>" method="post">

<lable>Send Your Comment</lable><br>
<input type="text" class="message" name="mes" required>
<button type="submit" name="submit" class="btn">Post Now</button>
</form>
<h4>View All Comments</h4>
<?php

if (isset($_POST["submit"])) 
{

  $sql="INSERT INTO comment(BID, SID, COMM, LOGS) VALUES ({$_GET["id"]},{$_SESSION["ID"]},'{$_POST["mes"]}',now())";
  $conn->query($sql);
  
}

 





 $sql="SELECT student.NAME,comment.COMM,comment.LOGS from comment inner join student on comment.SID=student.ID where comment.BID={$_GET["id"]} order by comment.CID DESC";
    $result=$conn->query($sql);
if($result->num_rows>0) 
{
  while ($row=$result->fetch_assoc()) 
  {
    echo "<p><strong>{$row["NAME"]}:</strong>

              <b>{$row["COMM"]}</b>

              <i>{$row["LOGS"]}</i>    


          </p>";
  }
}
else{
echo "No comments yet";
}

?>

</div>

</div>




<!--******************** Footer side***************************--->

</div>


</body>
</html>