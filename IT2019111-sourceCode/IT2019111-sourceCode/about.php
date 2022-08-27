<!DOCTYPE html>
<html>
<head>

<title>
Moody moon-About Us
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="style.css">


<style>

/*border1*/
div.ex1 {
  font-family: Times New Roman;
  width:600px;
  height: 400px;
  padding: 400px;
  margin-left:160px;
  box-sizing: border-box;
  background-color:white;
  
}

/*about us border*/
div.ex2 {
  font-family: Times New Roman;
  width:100%;
  height:100px;
  padding: 50px;
  box-sizing: border-box;
  background-color: #b3b3ff;
}

/* Large rounded border */
hr.new1 {
border: 5px solid #e67300;;
border-radius: 5px;
margin-top:-5px;
margin-left:-360px;
width:580px;

}

/*vertical line*/
.v2 {
  border-left: 6px solid black;
  height: 700px;
  position: absolute;
  left: 50%;
  margin-left: -700px;
  margin-top:100px;
  opacity:0.8;
}

</style>
</head>

<body>


<!-- home page image -->
<a class="container">
  <img src="first.JPG" alt="hotel" width="100%" height="100px"  style="opacity: 0.5;">
 <dl class="k" style="font-size:15px; margin-left:-840px; margin-top:-50px;"><dt>HOTEL and RESORTS</dt>
 <dd style="font-size:12px;"><i><b>ENJOY YOUR LIFE</b></i></dd>
 </dl>
 
 <img src="logo.PNG" alt="hotel" width="15%" height="80px"  style="margin-top:-100px; margin-left:10px;">
  </a>
  
<!--vertical line-->
<div class="vl"></div>
 
<!-- search bar --> 
<form class="example" action="/action_page.php" style="max-width:300px; margin-left:1220px; margin-top:-80px;  position: absolute;">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>


<!--first navigation-->

<div class="navbar" style="margin-top:-4px;">
  <a href="Home.php">HOME</a>
  
    <a href="about.php">ABOUT US</a>
  
  
  <div class="dropdown">
    <button class="dropbtn">ACCOMMODATION
     <i class="arrow down"></i> 
    </button>  
  <div class="dropdown-content">
      <a href="rooms.php">Rooms</a>
    </div>
  </div>
  
    <a href="dining.php">DINING</a>
  
 
      <a href="wedding.php">WEDDING</a>


 <a href="gallery.php">GALLERY</a>
  
 <a href="contact.php">CONTACT US</a>
  
</div>

<!--about us border-->
<div class="ex2"><h2 style="text-align:center; margin-top:-20px;"><strong>ABOUT US</strong></h2>
</div>

<!--vertical line-->
<div class="v2"></div>
<div class="v2" style="height:500px;margin-left: -650px; margin-top:200px;"></div>

<div>
<img src="abo.JPG" alt="hotel" width="100%" height="1000px"  style="opacity:0.7;">


<!--border1-->
<div class="ex1" style="margin-top:-950px;margin-left:360px; opacity:0.8;">

<h2 style="margin-top:-350px;margin-left:-360px;  margin-right:-180px;">YOUR MOODY MOON STORY</h2>


<!--Large rounded border-->
<hr class="new1">


 
 <h3 style="margin-left:-360px;  margin-right:-180px;">A new level of luxury hospitality</h1>
<h4 style="margin-top:-40px; margin-left:-80px;  margin-right:-180px;"><pre>in Sri Lanka</pre></h3>

<p style="margin-left:-360px;  margin-right:-180px;"><b>Every great city deserves a truly great international hotel - a special place that reflects the importance and the beauty of its location with world-class luxury and the very finest service.
</b></p>
<p style="margin-left:-360px;  margin-right:-180px;"><b>Moody Moon Hotel, Colombo is delighted to welcome you to the enchanting capital of Sri Lanka - a precious jewel in the Indian Ocean, with a glittering cultural heritage and a long, proud history.
</b></p>
<p style="margin-left:-360px;  margin-right:-180px;"><b>
The hotel benefits from a prime location by the sea that is in the heart of the business district and buzzing social hotspot. A personal tropical sanctuary that is perfect for escaping the city, it offers some of the finest, most modern accommodation in the country, with 500 luxurious guest rooms and suites, and 41 serviced apartments.
</b></p>
<p style="margin-left:-360px;  margin-right:-180px;"><b>
An exciting new dining and social scene has come to life around the hotel's outstanding group of restaurants and bars, and the exclusive Horizon Club Lounge is the largest of its kind in Colombo.
</b></p>

<p style="margin-left:-360px;  margin-right:-180px;"><b>
The hotel offers direct access to the most extensive international shopping mall in Sri Lanka, Shangri-La’s own One Galle Face Mall caters to the best of modern lifestyle needs from shopping, dining, entertainment, fashion, beauty and technology. The seven-storey mall offers guests the chance to explore over 200 retail outlets including emerging homegrown brands and global high-street favourites including over 30 restaurants, bars and cafes covering a range of world cuisines, the mall is the ideal place to spend leisurely hours.
</b></p>

<p style="margin-left:-360px;  margin-right:-180px;"><b>
Moody Moon Hotel, Colombo, looks forward to welcoming you soon.
</b></p>




</div>
</div>  

<br/><br/><br/><br/><br/><br/><br/><br/><br/>

<!--Footer-->

<?php

include 'footer.php';

?>


</body>

</html>
