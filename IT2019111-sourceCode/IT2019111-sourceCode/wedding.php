<!DOCTYPE html>
<html>
<head>

<title>
Moody moon-WEDDING
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="style.css">

<style>

/* button*/
.button {
 background: #ff9900;
 color: #ffffff;
 border: none;
 padding: 15px 100px;
 font-size: 16px;
 cursor: pointer;
 margin-left:35px;
 text-align:center

}


/*vertical line*/
.v2 {
  border-left: 3px solid #e67300;
  height: 160px;
  position: absolute;
  left: 30%;
  margin-left:-210px;
  margin-top:-100px;
}


/*wedding*/
div.ex1 {
  font-family: Times New Roman;
  width:100%;
  height:100px;
  padding: 50px;
  box-sizing: border-box;
  background-color: #b3b3ff;
}

/*WEDDING image change*/
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/*Slideshow container*/
.slideshow-container {
  max-width: 1600px;
  position: relative;
  margin: auto;
}


/*Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators*/
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/*Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 0.4s;
  animation-name: fade;
  animation-duration: 0.4s;
}




</style>
</head>

<body>


<!--header-->

<?php

include 'header.php';

?>

<!--wedding-->
<div class="ex1"><h2 style="text-align:center; margin-top:-20px;"><strong>WEDDINGS & CELEBRATIONS</strong></h2>
</div>
<br/>


<br>

<!--WEDDING image change-->

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="we1.JPG" style="margin-left:150px; width:80%; height:450px;">
</div>

<div class="mySlides fade">
  <img src="we3.JPG" style="margin-left:150px; width:80%; height:450px;">
</div>

<div class="mySlides fade">
  <img src="we5.JPG" style="margin-left:150px; width:80%; height:450px;">
</div>

<div class="mySlides fade">
  <img src="we4.JPG" style="margin-left:150px; width:80%; height:450px;">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>

<div style="margin-left:150px;">
<h1 style="color:#e67300;">Celebrate life’s special moments</h1>
<h1 style="font-family :TypeWriter;">with elegance and style</h1>

<hr style="margin-right:150px;">

<p style="text-align:center; margin-right:150px;">The city’s sought-after location for weddings, Moody Moon Hotel, Colombo offers unique and luxuriously styled venues with a
 dedicated team who will help make your special day a memorable one.
 </p>
 
 <p style="text-align:center; margin-right:150px;">At Moody Moon, we deliver bespoke experiences and make your dream wedding come to life. Browse through our curation of different
 Moody Moon hotel wedding destinations and inspirations here.
 </p>
 
 <br>
 <h4 style="color:#802b00">Request a Proposal</h4>
<p>Complete a simple form or contact us with your event requirements and leave the planning to us!</p>
<br><br>
<div>

 <button class="button" style="text-decoration: none;margin-left:220px; "><a style="text-decoration: none; color:white; " href="loginrequest.php">START PROPOSAL REQEST</a></button>
 
</div>
<div class="v2" style="margin-left:550px; margin-top:-150px;"></div>

<div style="margin-left:900px; margin-top:-180px;">
 <h4 style="color:#802b00">Weddings Contact</h4>
 <h5 style="color:#996666;">Phone</h5>
 <p>(94)11 236 7895</p>
 <h5 style="color:#996666;"> Email</h5>
 <p>events.mmcb@moodymoon.com</p>
  </div>
</div>



<br/><br/><br/><br/>




<!--Footer-->

<?php

include 'footer.php';

?>

</body>

</html>
