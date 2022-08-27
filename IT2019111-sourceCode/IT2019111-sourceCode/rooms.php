<!DOCTYPE html>
<html>
<head>

<title>
Moody moon-Room
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="style.css">

<style>

body{
	font-family: courier;
}


/*rooms*/
div.ex1 {
  font-family: Times New Roman;
  width:100%;
  height:100px;
  padding: 50px;
  box-sizing: border-box;
  background-color: #b3b3ff;
}


/*room image change*/
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

/*border1*/
div.exa2 {
  background-color: white;
  width: 350px;
  border: 1px solid black;
  padding: 200px;
  margin: 20px;
}


/*border2*/
div.exa3 {
  background-color:#f2f2f2;
  width:400px;
  border:none;
  padding: 5px;
  margin: 20px;
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

<!--room-->
<div class="ex1"><h2 style="text-align:center; margin-top:-20px;"><strong>ROOMS</strong></h2>
</div>
<br/>

<!--room image change-->

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="room1.JPG" style="margin-left:150px; width:80%; height:450px;">
</div>

<div class="mySlides fade">
  <img src="room2.JPG" style="margin-left:150px; width:80%; height:450px;">
</div>
</div>
<br>

<div style="text-align:center">
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
<h3 style="font-family :TypeWriter; color:#e67300;">Moody Moon Hotel,Colombo</h3>
<h1 style="font-family :TypeWriter;">Deluxe Ocean View Room</h1>

<hr style="margin-right:150px;">

<h3 style="color:#0000e6">Sophisticated style, stunning ocean vistas</h3>
<p style="margin-right:750px;">Deluxe Ocean View Rooms are beautifully appointed with a contemporary design and local Sri Lankan touches. All rooms look out
 over the Indian Ocean or Colombo cityscape.
 </p>
 
 <h4 style="color:#802b00">Features</h4>
 <ul>
 <li>Each room offers 42 sqm / 452 sqf of luxury.</li>

 <li>Panoramic views of the Indian Ocean and Galle Face Green.</li>

 <li>Large, modern bathroom with walk-in shower and separate bathtub.</li>

 <li>Signature Shangri-La bed with 300-thread-count lightweight duvet.</li>

 <li>Wi-Fi.</li>
</ul>
<br>

<h4 style="color:#802b00">Amenities</h4>
<h5 style="color:#996666;">Bath & Personal Care</h5>
<ul>
<li>Walk-in shower and/or separate bathtub</li>
<li>Bathroom mirror</li>
<li>Plush bathrobes and slippers</li>
<li>300 thread count linen</li>
<li>Pillow menu with hypoallergenic options</li>
<li>Iron and ironing board</li>
</ul>

<h5 style="color:#996666;">Media & Entertainment</h5>
<ul>
<li>High-speed Internet access</li>
<li>Flatscreen TV</li>
<li>Wide selection of international and local television channels</li>
</ul>

<h5 style="color:#996666;">Office Equipment & Stationery</h5>
<ul>
<li>Work space</li>
<li>International Direct Dial telephone with two lines</li>
<li>Electronic safe</li>
<li>USB charge ports</li>
<li>Digital alarm clock</li>
<li>Laptop charging socket</li>
</ul>

<h5 style="color:#996666;">Refreshments</h5>
<ul>
<li>Minibar</li>
<li>Water</li>
<li>Tea and coffee making facilities</li>
</ul>


<h5 style="color:#996666;">Children's meal plan for guests staying at the hotel.</h5>
<p style="margin-right:750px;">Children of registered hotel guests under the age of 6 can enjoy *buffet meals at no extra cost in the All Day Dining venue when
 accompanied by a paying adult; up to 2 children. For more than 2 children under the age of 6 or children who are 6 years and above but under the age of 12,
 a 50% discount on the buffet price will be given. *Buffet is subject to availability
</p>
 
</div>




<div class="exa2" style="margin-left:1000px;margin-top:-1000px;">


<div class="exa3" style="margin-left:-200px; margin-right:-300px; margin-top:-200px;">
<h3 style="color:#e67300;text-align:center;">Ready to book?</h3>
</div>
<br><br>

<script>

function validateForm()
{

<!--Arrival-->
var x=document.forms["myForm2"]["date"].value;
if (x==null || x=="")
{
alert("Please enter the arrival date before the click book now button!!!");
return false;
}

<!--Departure-->
var x=document.forms["myForm2"]["dated"].value;
if (x==null || x=="")
{
alert("Please enter the departure date before the click book now button!!!");
return false;
}


<!--rooms-->
var x=document.forms["myForm2"]["guest"].value;
if (x==null || x=="")
{
alert("Please select the number of guest for per room");
return false;
}

}
</script>


<form name="myForm2" action="sendroom.php" onsubmit="return validateForm()" method="post">

<!--Arrival-->
<div style="margin-top:-40px;">
 <label for="date" style="margin-left:-180px;">Arrival* : </label>
</div>
<div style="margin-top:-20px;">
 <input type="date" id="date" name="date" style="width:250px;margin-left:-70px;">
</div>
 <br><br>
 

 <!--Departure-->

 <label for="dated" style="margin-left:-180px;">Departure* : </label>

<div style="margin-top:-20px;">
 <input type="date" id="dated" name="dated" style="width:250px;margin-left:-70px;">
</div>
 <br><br>
 <hr style="width:380px;text-align:left;margin-left:-190px;"/>
 
 
<!--rooms--> 

<span style="margin-top:-500px;"><p></p></span> <!--To get down the room label-->
<label for="guest" style="margin-left:-180px;"> Rooms* : </label> 



<select id ="guest" name="guest" style="width:280px;margin-left:-100px;"> 
		<option value=""> -Max. 4 guests per room- </option>
		<option value="one">1 guests</option>
		<option value="two">2 guests</option>
		<option value="three">3 guests</option>
		<option value="four">4 guests</option>
</select>

	<br><br>
	<hr style="width:380px;text-align:left;margin-left:-190px;"/>
<br><br>
	
	<!--per night price-->
	<?php
		$con=mysqli_connect("localhost:3308","root","","finalproject");
	
	if (mysqli_connect_errno()) 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}

$result = mysqli_query($con,"SELECT * FROM roomprice WHERE id='1'"); //get room price from data base
while($row = mysqli_fetch_array($result)) { 
echo "<div style='margin-left:-150px; margin-right:-150px;'>";
echo "<span style='font-size:15px; color: #000066; margin-left:; margin-top:-150px;'>$row[price]</span>" ; 
echo "<br>";
echo "</div >";
 }
?>

<br><br>
<input type="submit" class="button" name="book_now" style="text-decoration: none; color: #ffffff; margin-left:-140px;margin-right:5px;" value="Book Now" />



</form>
</div>



<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


<!--Footer-->

<?php

include 'footer.php';

?>

</body>

</html>
