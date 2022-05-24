<?php
include "db.php";
session_start();
if(!isset($_SESSION['ID']))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}	
	

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
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    input[type="file"] {
    display:none;
}

.custom-file-upload {
    border: .1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
</style>
</head>
<body>

<div class="container">
	


<!--*****************body********************************** -->
	
	<div class="epro_background">

      <h2>Edit profile</h2>

    </div>

<br>
<br>

    <div>
        <?php


//retrive some data from the user
 $id= $_SESSION["ID"];

 $sql="select * from profile where sid={$id}";
        $ex=mysqli_query($conn,$sql);
        $ft=mysqli_fetch_assoc($ex);
 
// update and insert data into database in profile page
        if(isset($_POST["submit"])){
                $bio=$_POST["bio"];
                $birth=$_POST["birth"];
                $location=$_POST["loc"];
                 $file=$_FILES["efile"];


 

       
        if($ft){// check if aldredy value is inserted or not



   


         if($bio != null ){
                             $qr="update profile set bio='$bio' where sid=$id ";
        
        	$res=$conn->query($qr);
        if($res){echo "<div class='success'> Updated</div>";}
			 }
if($birth != null){

             $qr1="update profile set dob='$birth' where sid=$id ";
        
        	$res1=$conn->query($qr1);
        	echo "<div class='success'></div>";
}
 if($location != null){
 $qr2="update profile set location='$location'  where sid=$id ";
        
        	$res2=$conn->query($qr2);
            if($res2){echo "<div class='success'> </div>";}

}if($file !=null){

 $target_dir="upload/profile/";
$target_file=$target_dir.basename($_FILES["efile"]["name"]);
if (move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file)) 
{
             $qr3="update profile set img='{$target_file}' where sid=$id ";
        
        	$res3=$conn->query($qr3);
            if($res3){
        	echo "<div class='success'></div>";
}}

} 
//closed else part individual update query

}   //data checing closed 
		else{//not data contain then insert all data into database
          

             $target_dir="upload/profile/";
$target_file=$target_dir.basename($_FILES["efile"]["name"]);
            if (move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file)) 
{
             $qr1="insert into profile (sid,bio,dob,location,img,uname) values({$id},'$bio','$birth','$location','{$target_file}','{$_SESSION["NAME"]}')";
        
        	$res1=$conn->query($qr1);
        	echo "<div class='success'>Profile Picture Updated</div>";
        }
		   }//close else of data insert 
		   
        



 



  


//retrive data for new bio data

  $sql="select * from profile where sid={$id}";
        $ex=mysqli_query($conn,$sql);
        $ft=mysqli_fetch_assoc($ex);
 }//close submit
		

        ?>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

     <label class="custom-file-upload" for="img-input">
 
  <img src="<?php echo $ft["img"];?>" for="img-input" id="img" class="profile"/>

    <input type="file" name="efile" id="img-input" />
</label>
    
  <br>
    
  <input  class="pinput" type="text" name="bio"  placeholder="Bio" value="<?php echo $ft["bio"];?>" ><br>
    <input  class="pinput" type="date" name="birth" value="<?php echo $ft["dob"];?>"><br>  
     <input  class="pinput" type="text" name="loc"  placeholder="Location" value="<?php echo $ft["location"];?>"><br>  
     <button type="submit" class="btn3" name="submit">Save</button>
       </form>
    </div>

<!--******************** Footer side***************************--->

</div>

</body>

<script>

 
</html>