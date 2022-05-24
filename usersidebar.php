<?php
include "db.php";
session_start();
if(!isset($_SESSION['ID']))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}	
		$sql="select * from profile where sid={$_SESSION["ID"]}";
	$ex=mysqli_query($conn,$sql);
	$trv=mysqli_fetch_assoc($ex);
?>




<ul>
     
	<li><a href="uhome.php"><i class="fa fa-home" style="font-size:31px;"></i></a></li>
	<li><a href="search_books.php"><i class="fa fa-search" style="font-size:31px"></i></a></li>
	<li><a href="competion.php"><i class="fa fa-star-half-o" style="font-size:31px"></i></a></li>
   <li><a href="achivements.php"><i class="fa fa-bolt" aria-hidden="true" style="font-size:31px"></i></a></li>
	
	<div id="mySidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"  style="margin:5% 75% 0 0;color:white;"><i class="fa fa-arrow-left"></i></a>
      
       <li><a href="#" style="font-size:25px;margin:10px 0px 0px 20px">Hello<span style="font-size:27px">!</span> <?php echo $_SESSION["NAME"];?></a></li>
    <hr>
     <li><a href="user_profile.php"><i class="fa fa-user-o" style="font-size:25px;margin-top:40px;"></i>&nbsp;&nbsp; Profile</a></li>
   
      <li><a href="request.php"><i class="fa fa-paper-plane-o" style="font-size:25px;"></i>&nbsp;&nbsp;Send request</a></li>
        <li><a href="Pay-online.php"><i class="fa fa-money" style="font-size:25px;"></i>&nbsp;&nbsp;Pay-online</a></li>
      <hr>
      <li><a href="devloper.php"><i class="fa fa-code" style="font-size:25px;"></i>&nbsp;&nbsp;Developer</a></li>
     
    <hr>
       <li><a href="settings.php"><i class="fa fa-cogs" style="font-size:25px;margin-top:30px;"></i>&nbsp;&nbsp;Settings & Privacy</a></li>
       <li><a href="#"><i class="fa fa-question-circle" aria-hidden="true" style="font-size:25px;"></i>&nbsp;&nbsp;Help Center </a></li>
           <hr>


</div>
</ul>	
<i class="fa fa-user-circle" aria-hidden="true" onclick="openNav()" style="margin:3% 4%;font-size:30px;color:white;"></i>
  
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "65%";
 document.getElementById("swip").style.opacity="0";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
 document.getElementById("swip").style.opacity="1";
 
}
</script>