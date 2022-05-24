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
<style>
.btn2{
 margin:1% 5%;
 
 color:#eee;
width:90%;
border-radius:10%;
background-color:#911;
display:inline-block;
}
 
.alog table tr td {

padding:2% 1%;
}
.alog table tr th  {

padding:3% 1%;
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


<!--*****************Delete a book********************************** -->


<?php
if(isset($_POST["delete"])){
$id= $_POST["delete"];
 $qr1="select * from book where BID=$id";
$ex1=mysqli_query($conn,$qr1);
$trv1=mysqli_fetch_assoc($ex1);
    $Data_in_file=$trv1["FILE"]; // get the path of the file to want delete 

 if(file_exists($Data_in_file)){


 unlink("$Data_in_file"); //delete the file
 }else{
echo "<script>alert('Access Denied File Not Found')</script>";
 }

 
 $sql="delete from book where BID=$id";
 $execute=mysqli_query($conn,$sql);
  if($execute){

echo "<div class='success' style='margin:20% 0 -10% 0 ;' >Record Successfully Deleted</div>";
  }
}
?>
<!--*****************body********************************** -->
<div id="wraper">
	

<div class="alog">
 
<?php 

$sql="SELECT * FROM book";
$res=$conn->query($sql);
if ($res->num_rows>0) 
{
echo "<table>
      <tr class='first_row'>
     <th>SNO</th>
     <th>&nbsp;&nbsp;BOOKNAME</th>
     <th>&nbsp;&nbsp;Delete</th>
     
  
      </tr>
      ";
    $i=0;
    while ($row=$res->fetch_assoc()) 
    {
    	$i++;
    	echo "<tr>";
       echo "<td>{$i}</td>";
       echo "<td><a href='{$row["FILE"]}' target='_blank'>{$row["BTITLE"]}</a>

 </td>";
?>
<td>
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post'>   
	       <button  name='delete' class='btn2' value="<?php echo $row["BID"];?>" >Delete</button>
              
        </form>

 </td>
</tr>
  <?php
	
    }



echo "</table>";
}
else{
	echo "<div class='error' style='padding-top:10%'>No books records found</div>";
}

?>


</div>

</div>


<!--******************** Footer side***************************--->

</div>


</body>
</html>