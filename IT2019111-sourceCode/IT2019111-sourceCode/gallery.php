<!DOCTYPE html>
<html>
<head>

<title>
Moody moon-Gallery
</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="style.css">

<style>

/*border1*/
div.ex1 {
  font-family: Times New Roman;
  width:700px;
  height:1550px;
  padding: 450px;
  margin-left:160px;
  box-sizing: border-box;
  background-color:#c6ecd9;
}

/*gallery border*/
div.ex2 {
  font-family: Times New Roman;
  width:100%;
  height:100px;
  padding: 50px;
  box-sizing: border-box;
  background-color: #b3b3ff;
}






/* Center website */
.main {
  width: 700px;
  margin-left:-350px;
  margin: ;
}



.row {
  margin: 10px -55px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 7px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}


</style>
</head>

<body>


<!-- home page image -->
<a class="container">
  <img src="first.JPG" alt="hotel" width="100%" height="100px"  style="opacity: 0.7;">
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

<!--gallery us border-->
<div class="ex2"><h2 style="text-align:center; margin-top:-20px;"><strong>GALLERY</strong></h2>
</div>


<div>
  <img src="abo.JPG" alt="hotel" width="100%" height="1750px;"  style="opacity:0.5;">
 
<!--border1-->
<div class="ex1" style="margin-top:-1700px; margin-left:300px; opacity:0.9;">

<h2 style="font-family:Courier New; margin-top:-360px;margin-left:-360px;  margin-right:-180px;">PHOTOS</h2>



<!-- MAIN (Center website) -->
<div class="main">
<div id="myBtnContainer" style="margin-left:500px; margin-top:-55px;">
  <button class="btn active" onclick="filterSelection('all')" style="margin-top:-300px; margin-left:-400px;" > Show all</button>
  <button class="btn" onclick="filterSelection('Rooms')">Rooms</button>
  <button class="btn" onclick="filterSelection('Suites')"> Suites</button>
  <button class="btn" onclick="filterSelection('Dining')"> Dining</button>
  <button class="btn" onclick="filterSelection('Events')"> Events</button>  
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">

  <!--rooms-->
  <div class="column Rooms">
    <div class="content">
	<a target="_blank" href="gr1.JPG">
      <img src="gr1.JPG" alt="Rooms" style="width:230px; height:230px;" >
	  </a>
    </div>
  </div>
  
    <div class="column Rooms">
    <div class="content">
	<a target="_blank" href="gr2.JPG">
      <img src="gr2.JPG" alt="Rooms" style="width:230px; height:230px;"  >
	  </a>
    </div>
  </div>
  
    <div class="column Rooms">
    <div class="content">
	<a target="_blank" href="gr3.JPG">
      <img src="gr3.JPG" alt="Rooms" style="width:230px; height:230px;" >
	  </a>
    </div>
  </div>
  
  
    <div class="column Rooms">
    <div class="content">
	<a target="_blank" href="gr4.JPG">
      <img src="gr4.JPG" alt="Rooms" style="width:230px; height:230px;" >
	  </a>
    </div>
  </div>
  
    <!--suites-->
  <div class="column Suites">
    <div class="content">
	<a target="_blank" href="gs1.JPG">
    <img src="gs1.JPG" alt="Suites" style="width:230px; height:230px;" >
	</a>
    </div>
  </div>
  
   <div class="column Suites">
    <div class="content">
	<a target="_blank" href="gs2.JPG">
    <img src="gs2.JPG" alt="Suites" style="width:230px; height:230px;" >
	</a>
    </div>
  </div>
  
   <div class="column Suites">
    <div class="content">
	<a target="_blank" href="gs3.JPG">
    <img src="gs3.JPG" alt="Suites" style="width:230px; height:230px;" >
	</a>
    </div>
  </div>
  
   <div class="column Suites">
    <div class="content">
		<a target="_blank" href="gs4.JPG">
    <img src="gs4.JPG" alt="Suites" style="width:230px; height:230px;" >
	</a>
    </div>
  </div>
  
    <!--dining-->
  <div class="column Dining">
    <div class="content">
	<a target="_blank" href="gd1.JPG">
    <img src="gd1.JPG" alt="Dining" style="width:230px; height:230px;" >
	</a>
    </div>
  </div>
  
    <div class="column Dining">
    <div class="content">
	<a target="_blank" href="gd2.JPG">
    <img src="gd2.JPG" alt="Dining" style="width:230px; height:230px;" >
	</a>
    </div>
  </div>
  
    <div class="column Dining">
    <div class="content">
	<a target="_blank" href="gd3.JPG">
    <img src="gd3.JPG" alt="Dining" style="width:230px; height:230px;" >
	</a>
    </div>
  </div>
  
    <div class="column Dining">
    <div class="content">
	<a target="_blank" href="gd4.JPG">
    <img src="gd4.JPG" alt="Dining" style="width:230px; height:230px;" >
	</a>
    </div>
  </div>
  
  <!--event-->
  <div class="column Events">
    <div class="content">
	<a target="_blank" href="ge1.JPG">
      <img src="ge1.JPG" alt="Events" style="width:230px; height:230px;" >
	  </a>
    </div>
  </div>
  
  
   <div class="column Events">
    <div class="content">
	<a target="_blank" href="ge2.JPG">
      <img src="ge2.JPG" alt="Events" style="width:230px; height:230px;" >
	  </a>
    </div>
  </div>
  
   <div class="column Events">
    <div class="content">
	<a target="_blank" href="ge3.JPG">
      <img src="ge3.JPG" alt="Events" style="width:230px; height:230px;" >
	  </a>
    </div>
  </div>
 
 
 
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>








</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>




<!--Footer-->

<?php

include 'footer.php';

?>


</body>

</html>
