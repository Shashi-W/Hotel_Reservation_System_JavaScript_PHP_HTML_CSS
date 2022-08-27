<!DOCTYPE html>
<html>
<head>

<title>
Moody moon-Contact
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="style.css">


<style>

  /*contact page heading*/
div.ex1 {
  font-family: Times New Roman;
  width:100%;
  height:100px;
  padding: 50px;
  box-sizing: border-box;
  background-color: #b3b3ff;
}


/*form*/

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background:#ffa31a;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #ffa31a;
}

/* Set a style for the submit button */
.btn {
  background-color:#ffa31a;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
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
 
 <img src="logo.PNG" alt="hotel" width="15%" height="80px"  style="margin-top:-100px;margin-left:10px;">
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
  <a href="home.php">HOME</a>
  
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

<!--First border--> 
<div class="ex1"><h2 style="text-align: center; margin-top:-20px;"><strong>&#9742;Contact Us</strong></h2>
</div>


<!--form email validate-->
<script>
function validateForm1()
{
var x=document.forms["myForm1"]["email"].value;
if (x==null || x=="")
{
alert("Email must be filled out");
return false;
}
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
{
alert("Not a valid e-mail address");
return false;
} 
} 
</script>


<div class="container">

<!--background image-->
  <img src="con1.JPG" alt="contact" width="100%" height="900px;"  style="opacity:0.3;"> 
 
  <div class="centered">
  
 <div class="ex2">
 

<h2 style="margin-top:-100px;text-align:center;"><b>Send Us Your Feedback</b></h2>

<br/>







<form style="padding: 300px; background-color:; margin-top:-250px; " action="sendcontact.php" onsubmit="return validateForm1();" name="myForm1" method="post">

<label for="name">Name :</label><br/><br/>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Enter Name..." name="name" required>
  </div>

 <!--email-->

  <label for="email">Email Address:</label><br/><br/>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Enter Email..." name="email" required>
  </div>
  
  <label for="sbj">Subject:</label><br/><br/>  
  <div class="input-container">
    <i class="fa fa-book icon "></i>
    <input class="input-field" type="text" placeholder="Subject..." name="subject">
  </div>
  
 <label for="massage">Message:</label><br/><br/>
  <div class="input-container">
    <i class="fa fa-pencil icon "></i>
	<textarea row="5" cols="120" name="message" placeholder="Message..." required></textarea>
    </div>
 
<br/><br/><br/>

<input type="submit" class="btn" value="Send Message" name="send" style="width:220px;">




</div>

 <div style="margin-top:-332px; margin-left:500px;">
 
 <input type="Reset" class="btn" style="width:220px;margin-top:-100px;" value="Clear the form"/>
 
 
 </div>
  
  
  </div>
</div>
</form>

<br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>




 


<!--Footer-->

<?php

include 'footer.php';

?>

</body>

</html>

