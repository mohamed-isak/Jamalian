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
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Web design</title>
		<!-----------------------meta tags------------------->
	 <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta http-equiv="refresh" content="">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->
<!-------------------------link--------------------------->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="swiper/swiper.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-------------------------------------------------------->
<style>
     
  .swiper-container {
      width: 100%;
      height:400px;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      background-size: cover;
      background-position: center;
       
    }
    img.swiper-slide{
        width:10%;
    }
    .gallery-top {
      height: 80%;
      width: 100%;
    }
    .gallery-thumbs {
      height: 20%;
       
      padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
      height: 10%;
   
    }
    .gallery-thumbs .swiper-slide-thumb-active {
  width:100%;
  height:400px;
    }
    .swi-img{
        margin-top:5%;
        display:inline-block;
    width:23%;
    height:15%;
    padding:0;
     
    
    }
    


.view_profile
{
    display:inline-block;
    height:100%;
    width:100%;
}
 
  </style>

		  <script>
function getdistrict(val) {

	$.ajax({
	type: "POST",
	url: "get_student.php",
	data:'student_id='+val,
	success: function(data){
		$("#wrapersearch").html(data);
	}
	});
}
 
</script>
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
<div id="wrapersearch">
	

<div class="alog">
 
<div class="search_align">

<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

<br><div class="serch-input">
<input type="text" class="messages" name="name" placeholder="Search" required>

<button type="submit" name="submit" style="display:none"></button></div>
</form>
</div>

<?php

if (isset($_POST["submit"])) 
{
     
    
    $qr1="select * from profile where uname like '%{$_POST["name"]}%' ";
    $ex1=mysqli_query($conn,$qr1);
echo "<div class='tab'>
  <button class='tablinks' style='font-size:12px;padding:2.5% 5%;'>Peoples</button>
   
</div>";
if ($ex1->num_rows>0) {

    while($trv=mysqli_fetch_assoc($ex1)){


    $id=($trv["pid"]);

       echo " 
 <div class='view_profile' >
   
     <a  href='#' onClick='getdistrict($id);'>
      <img class='dp' src='{$trv["img"]}'>
    <h5 class='profile_name'>{$trv["uname"]}</h5></a>

</div>   ";
   
 

    }
    
}else{
echo "<div class='error'>No Peoples Found</div>";

}
       
   
    
    
    
    
$sql="SELECT  * from book where BTITLE like '%{$_POST["name"]}%' or KEYWORDS like '%{$_POST["name"]}%'";
$res=$conn->query($sql);
echo " <div class='tab' > 
  <button class='tablinks' style='font-size:12px;padding:2.5% 5%;' >Books</button>
   
</div>";
if ($res->num_rows>0) 
{
 
echo "  
   
 
<table class='search_table' style='margin:3% 0'>
      <tr>
    
     
      </tr>
      ";
    
    while ($row=$res->fetch_assoc()) 
    {
    	
    	echo "<tr>";
        echo "<td class='sbookname'>{$row["BTITLE"]}</td>";
      echo "<td><a href='https://'><i class='fa fa-book'></i></a></td>";
      echo "<td><a href='https://'><i class='fa fa-link'></i></a></td>";
     
      
        
       echo "</tr>";
    }



echo "</table>";

}

else{
	echo "<div class='error'>No books records found</div>";
}

}

?></div>

 
 



<!-----------------c-link--------------------->

 <!-- Swiper -->

 <div class="swip" id="swip">
  <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
 
      <div class="swiper-slide"  >
          <!-- programming languages--->
          <a href="https://www.youtube.com/watch?v=SIIna1Yus0k&list=PL4unWLKFsZfcwxU3w1QutMVtJfN6FVjFM&index=4"><img src="img/c.png"  class="swi-img image_show"></a>
      <a href="https://www.youtube.com/watch?v=HmeVeBHBaw4&list=PLxLRoiL22apLF12XUQtiN2ISUC1HtPR6Y"><img src="img/java.png" class="swi-img image_show"></a>
        <a href="https://www.youtube.com/watch?v=HmeVeBHBaw4&list=PLxLRoiL22apLF12XUQtiN2ISUC1HtPR6Y"><img src="img/java.png" class="swi-img image_show"></a>
           <a href="https://www.youtube.com/watch?v=HmeVeBHBaw4&list=PLxLRoiL22apLF12XUQtiN2ISUC1HtPR6Y"><img src="img/python.png" class="swi-img image_show"></a>
     
             </div>
            
           
           
            <div class="swiper-slide"  > 
            <!-- website languages--->
            <a href="https://www.youtube.com/watch?v=Oes56FoYABc&list=PL4unWLKFsZfcwxU3w1QutMVtJfN6FVjFM&index=1"><img src="img/html.png" class="swi-img image_show"></a>
            <a href="https://www.youtube.com/watch?v=FHkJ5H352hM&list=PL4unWLKFsZfcwxU3w1QutMVtJfN6FVjFM&index=2"><img src="img/css.png" class="swi-img image_show"></a>
            <a href="https://www.youtube.com/watch?v=iEREulp-dX0&list=PL4unWLKFsZfcwxU3w1QutMVtJfN6FVjFM&index=9"><img src="img/javascript.png"  class="swi-img image_show"></a>
             <a href="https://www.youtube.com/watch?v=Pit-oEBMNxs&list=PL4unWLKFsZffK14yc-5985-5UZ9addqDp"><img src="img/php.png" class="swi-img image_show"></a>
             
             </div>
              <div class="swiper-slide"  >
                  <!-- .net languages--->
                   
              <a href="https://www.youtube.com/watch?v=-_9CXOwNYMI&list=PL4unWLKFsZffGynVZ7ZXQ2zLtaoxV9JjC"><img src="img/csharp.png" class="swi-img image_show"></a>
              <a href=""><a href=""><img src="img/bootstrap.png" class="swi-img image_show"></a>
              <a href=""><a href=""><img src="img/bootstrap.png" class="swi-img image_show"></a>
              <a href=""><a href=""><img src="img/bootstrap.png" class="swi-img image_show"></a>
             </div>
              
               
              
              
               
    </div>
    </div>
    <!-- Add Arrows -->
    
  <div class="swiper-container gallery-thumbs">
    </div>


</div>






<!-------------------------shops----------------------------->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">BOOKS</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">COURSE</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">TNPC</button></button>
  <button class="tablinks" onclick="openCity(event, 'delhi')">IT</button>
</div>

<div id="London" class="tabcontent">
  
       <div class="card">
     <h3>Book-title</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
      <!--<i class="fa fa-percent"></i>&nbsp;50% Discount every course.<br>-->
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
         <div class="card">
     <h3>Book-title</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
    
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
         <div class="card">
     <h3>Book-title</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
    
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
         <div class="card">
     <h3>Book-title</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
     
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
</div>


<div id="Paris" class="tabcontent">
   <div class="card">
     <h3>Typewriting</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
  
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
       <div class="card">
     <h3>Hacking</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
    
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
       <div class="card">
     <h3>Networking</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
     
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
       <div class="card">
     <h3>ABC course</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
      
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
</div>

<div id="Tokyo" class="tabcontent">
  
   <div class="card">
     <h3>Group-1</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
     
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
       <div class="card">
     <h3>Group-2</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
     
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
       <div class="card">
     <h3>Group-3</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
     
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
       <div class="card">
     <h3>Group-4</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
    
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>

</div>
<div id="delhi" class="tabcontent">
  
   <div class="card">
     <h3>www.Greekfoks.com</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
 
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
      
       <div class="card">
     <h3>www.stackoverflow.com</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
      <i class="fa fa-percent"></i>&nbsp;50% Discount every course.<br>
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
      
       <div class="card">
     <h3>www.abc.com</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
      <i class="fa fa-percent"></i>&nbsp;50% Discount every course.<br>
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
       <div class="card">
     <h3>www.abc.com</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
      <i class="fa fa-percent"></i>&nbsp;50% Discount every course.<br>
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
      
      
      
       <div class="card">
     <h3>www.abc.com</h3><br>
    <p> 
       <i class="fa fa-arrows"></i>&nbsp;java,python<br>
      <i class="fa fa-percent"></i>&nbsp;50% Discount every course.<br>
      <i class="fa fa-phone"></i>&nbsp;+91 86683-86868
    </p>
      </div>
    
</div>










</div>

</div>




<!--******************** Footer side***************************--->

</div>
<script src="css/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="swiper/swiper.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 50,
      slidesPerView: 4,
      loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 60,
      loop:true,
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });
    
    
    
    
    
    
    
    
    
    function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
  </script>
</body>
</html>