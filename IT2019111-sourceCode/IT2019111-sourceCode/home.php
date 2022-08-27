<!DOCTYPE html>
<html>
<head>

<title>
Moody moon-Home Page
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

/*Caption text*/
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
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


/*border1*/
div.ex1 {
  font-family: Times New Roman;
  width:80%;
  height:1000px;
  padding: 400px;
  margin-left:160px;
  box-sizing: border-box;
  background-color:  #e6e6e6;
}

/*border2*/
div.ex2 {
  font-family: Times New Roman;
  width:250px;
  height:220px;
  padding:200px;
  margin-left:160px;
  box-sizing: border-box;
  background-color: white;
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
  <img src="h1.JPG" style="width:100%; height:470px;">
  <div class="text">...HOTEL MOODY MOON...AMAZING NIGHT...</div>
</div>

<div class="mySlides fade">
  <img src="h3.JPG" style="width:100%; height:470px;">
  <div class="text">...FREEDOM...</div>
</div>

<div class="mySlides fade">
  <img src="hh.JPG" style="width:100%; height:470px;">
  <div class="text">...ENVIRONMENT...</div>
</div>

<div class="mySlides fade">
  <img src="h4.JPG" style="width:100%; height:470px;">
  <div class="text">...AMAZING FUN...</div>
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



<!--FIRST PARAGRAPH-->
 <h2 style="text-align:center;"><strong><ins style="color:#6495ED; font-size:30px;">Welcome to</ins></strong><b style="color:#9FAFDF; font-size:40px;"> The HOTEL | MOODY MOON</b></h2>
<br/>



<div style=" margin-left:200px; margin-right:200px; text-align: center; text-center: inter-word; font-family: 'Times New Roman', serif;; padding:10px; font-size:22px;">
<p><strong>Every great city deserves a truly great international hotel - a special place that reflects the importance and the beauty of its location with world-class luxury and the very finest service.
Moody Moon Hotel, Colombo is delighted to welcome you to the enchanting capital of Sri Lanka - a precious jewel in the Indian Ocean, with a glittering cultural heritage and a long, proud history.</strong><span id="dots">...</span>


<span id="more">The hotel benefits from a prime location by the sea that is in the heart of the business district and buzzing social hotspot. A personal tropical sanctuary that is perfect for escaping the city, it offers some of the finest, most modern accommodation in the country, with 500 luxurious guest rooms and suites, and 41 serviced apartments.

An exciting new dining and social scene has come to life around the hotel's outstanding group of restaurants and bars, and the exclusive Horizon Club Lounge is the largest of its kind in Colombo.</span></p>
<button class="buton"  onclick="myFunction()" id="myBtn" style="">Read more</button>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</div>

<br/><br/><br/>

<hr style="width:70%;text-align:left;margin-left:250px;">
<br/><br/>

<!--border1-->
<div class="ex1">
<h4 style="margin-top:-400px;text-align:center;"><pre>T R E A S U R E D </pre> </h4>
<h2 style="text-align:center;">LUXURY HIGHLIGHTS</h2>

<!--first image accommodation-->
 <img src="home1.JPG" alt="room" width="500px" height="400px" style="margin-left:-380px;">
 
 <div class="ex2" style="margin-top:-400px;">
 <h4 style="margin-left:-60px; margin-top:-180px;">ACCOMMODATION</h4>
 <p style="margin-left:-150px; margin-right:-100px;">Our room and suites are a perfect blend of luxury...A pinnacle of comfort, our rooms are dressed in warm shades of beige, fitted with white marble bathrooms & adorned with furniture in soothing shades of ivory.</p>

 <button class="button2" style=""><a style="text-decoration: none;" href="rooms.php">ROOMS</a></button>
 

 </div>
 <div style=" margin-top:-160px; margin-left:350px;"><button class="button3" style=" "><a style="text-decoration: none;" href="gallery.php">GALLERY</a></button></div>

 <!--second image dining-->
 
  <img src="home2.JPG" alt="dining" width="500px" height="400px" style="margin-left:-380px;margin-top:150px;">
 
 <div class="ex2" style="margin-top:400px; margin-top:-400px;">
 <h4 style="margin-left:-60px; margin-top:-180px;">DINING</h4>
 <p style="margin-left:-150px; margin-right:-100px;">Explore the world as you feast on delectable options from our resta...Comprising the very best of bars and restaurants in Colombo, The Moody Moon offers grandeur extravagance & and unparalleled dining experiences. </p>

 <button class="button2" style="margin-left:-70px;"><a style="text-decoration: none;" href="dining.php">More..</a></button>
 
 </div>
 
 
 <!--side image area-->
<div class="responsive" style="margin-left:570px; margin-top:-828px;">
  <div class="gallery">
    <a target="_blank" href="pic2.JPG">
      <img src="pic2.JPG" alt="pic2" width="230" height="230">
    </a>
  </div>
</div>


<div class="responsive" style="margin-left:570px; margin-top:50px;">
  <div class="gallery">
    <a target="_blank" href="home3.JPG">
      <img src="home3.JPG" alt="home3" width="230" height="240">
    </a>
  </div>
</div>

<div class="responsive" style="margin-left:570px; margin-top:50px;">
  <div class="gallery">
    <a target="_blank" href="pic3.JPG">
      <img src="pic3.JPG" alt="pic3" width="230" height="250">
    </a>
  </div>
</div>

<div class="clearfix"></div>
 
 
 

 </div>


<br/><br/><br/><br/><br/><br/>



<!--Footer-->
<?php

include 'footer.php';

?>


</body>

</html>
