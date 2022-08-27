<!DOCTYPE html>
<html>
<head>

<title>
Moody moon-Dining
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="style.css">


<style>

/*Home page Slide Show*/
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

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/*On smaller screens, decrease text size*/
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


/*border 1*/
div.ex1 {
  font-family: Times New Roman;
  width:200px;
  height:200px;
  padding:200px;
  box-sizing: border-box;
  background-color: #d9d9d9;
}


/*border 2*/
div.ex2 {
  font-family: Times New Roman;
  width:185px;
  height:185px;
  padding:185px;
  box-sizing: border-box;
  background-color:white;
}

/* button*/
.button {
 background: #ff9900;
 color: #ffffff;
 border: none;
 
 padding: 15px 100px;
 font-size: 16px;
 cursor: pointer;
 margin-left:-120px;
 margin-right:-50px;
 text-align:center

}


</style>
</head>

<body>

<!--header-->

<?php

include 'header.php';

?>


<!-- Home page Slide Show-->

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="d1.JPG" style="width:100%; height:450px;">
</div>

<div class="mySlides fade">
  <img src="gd2.JPG" style="width:100%; height:450px;">

</div>

<div class="mySlides fade">
  <img src="d2.JPG" style="width:100%; height:450px;">
</div>

</div>
<br>

<div style="text-align:center">
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

<br/><br/>
<hr style="width:70%;text-align:left;margin-left:250px;">
<br/>

<h2 style="text-align:center;"><pre>H O T E L I N C O L O M B O</pre> </h2>
<h2 style="text-align:center;">DINING</h2>

<br/><br/>
<p style="text-align:center; margin-left:100px; margin-right:100px;">Comprising the very best of bars and restaurants in Colombo, The Moody Moon offers grandeur extravagance & and unparalleled dining experiences. Serving exotic dishes from around the world, you will be spoilt for choice. Embark on a culinary adventure whether you wish to savour local delights at Harbour Court or taste the wonders of the sea at The Ocean Seafood Restaurant. Always delighted to cater to your individual needs, we will be glad to customise our menus to your unique preferences.
</p>

<br/><br/>
<hr style="width:70%;text-align:left;margin-left:250px;">
<br/>

<br/><br/>

 <img src="d3.JPG" alt="dining1" width="400px" height="400px"  style="margin-left:100px;">
 <img src="d4.JPG" alt="dining1" width="400px" height="400px" style="margin-left:50px;">
 <img src="d5.JPG" alt="dining1" width="400px" height="400px" style="margin-left:50px;">
 
 
 <div class ="ex1" style="margin-left:100px;">
 <div class ="ex2" style="margin-left:-185px; margin-top:-185px;">
 
 <h3 style="font-family:courier; margin-left:-170px;margin-right:-180px;margin-top:-160px; text-align:center;">HARBOUR COURT</h3>

 <p style="margin-left:-170px;margin-right:-180px;">Take a gastronomic journey through the Orient at The Harbour Court</p>
 <br/>
  <button class="button"><a style="text-decoration: none; color: #ffffff; margin-left:-45px;" href="hc.php">Read More...</a></button>
 
 </div>
 </div>
 
 <div class ="ex1" style="margin-left:555px; margin-top:-400px;">
  <div class ="ex2" style="margin-left:-185px; margin-top:-185px;">
  
 <h3 style="font-family:courier; margin-left:-170px;margin-right:-180px;margin-top:-160px; text-align:center;">STEAKBAR</h3>
  <p style="margin-left:-170px;margin-right:-180px;">An unforgettable, gastronomic adventure around the globe</p>
  <br/><br/>
   <button class="button"><a style="text-decoration: none; color: #ffffff; margin-left:-45px;" href="steakbar.php">Read More...</a></button>
  
 </div>
 </div>
 
 <div class ="ex1" style="margin-left:1010px; margin-top:-400px;">
  <div class ="ex2" style="margin-left:-185px; margin-top:-185px;">
  
  <h3 style="font-family:courier; margin-left:-170px;margin-right:-180px;margin-top:-160px; text-align:center;">HONEY BEACH CLUB</h3>
  <p style="margin-left:-170px;margin-right:-180px;">Enjoy wondrous food & cocktails as you lounge by the pool</p>
  <br/><br/>
   <button class="button"><a style="text-decoration: none; color: #ffffff; margin-left:-45px;" href="hbc.php">Read More...</a></button>
  
 </div>
 </div>

<br/><br/><br/><br/><br/><br/>




<!--Footer-->

<?php

include 'footer.php';

?>


</body>

</html>
