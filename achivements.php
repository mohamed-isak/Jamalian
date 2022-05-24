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
	
	<title>Web design</title>
		<!-----------------------meta tags------------------->
	 <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta http-equiv="refresh" content="30">


	<meta name="google-analytics" content="1-AHFKALJ"/>
	<meta name="uservoice" content="asdfasdf"/>
	<meta name="description" content="Free Web tutorials">
	<!-----------------------------end---------------------->

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	

<div class="alog">


<div class="row">
  <div class="column">
    <img src="img/11.jpg" style="width:45%;height:200px;float:left;border:1px solid black;border-radius:5px;margin:0px 0px 0px 10px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor alignment">
    <br>
    
  </div>
  
  
  <div class="column">
    <img src="img/11.jpg" style="width:45%;height:200px;border:1px solid black;border-radius:5px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor alignment"><br>
  </div>
  <div class="column">
    <img src="img/12.jpg" style="width:45%;height:200px;border:1px solid black;border-radius:5px;float:left;margin:0px 0px 0px 10px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor alignment"><br>
  </div>
  <div class="column">
    <img src="img/11.jpg" style="width:45%;height:200px;border:1px solid black;border-radius:5px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor alignment">
  </div>
  
  
  <div class="column">
    <img src="img/10.jpg" style="width:45%;height:200px;float:left;border:1px solid black;border-radius:5px;margin:0px 0px 0px 10px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor alignment">
    <br>
    
  </div>
  
  
  <div class="column">
    <img src="img/12.jpg" style="width:45%;height:200px;border:1px solid black;border-radius:5px;margin:0px 0px 0px 10px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor alignment"><br>
  </div>
  
  
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
     
      <img class="img" src="img/11.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      
      <img class="img" src="img/12.jpg" style="width:100%">
    </div>

    <div class="mySlides">
     
      <img class="img" src="img/8.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">

      <img class="img" src="img/4.jpg" style="width:100%">
    </div>
 
 
 

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    
  </div>
</div>


</div>

</div>




<!--******************** Footer side***************************--->

</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    

</body>
</html>