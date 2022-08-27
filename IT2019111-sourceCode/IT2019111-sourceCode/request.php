<!DOCTYPE html>
<html>
<head>
<title>Moody moon-REQUEST A PROPOSAL</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="style.css">


<style>

body {
  background-image: url('we2.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

/*border1*/
div.ex1 {
  font-family: Times New Roman;
  width:600px;
  height: 1500px;
  padding: 400px;
  box-sizing: border-box;
  background-color:white;
  opacity:0.9;
  margin-left:350px;
}




</style>
</head>

<body>

<div class="ex1">
<div style="margin-top:-350px;font-size:20px;">
<a href="home.php" style="margin-left:-350px; text-decoration: none;color:black; "><b>Home</b></a>
<div class="vl" style=" margin-left:20px;  height: 40px;  border-left:3px solid #e67300; margin-top:-30px;"></div>
<a href="wedding.php" style=" text-decoration: none;color:black; margin-left:40px;"><b>Wedding</b></a>
<div class="vl" style=" margin-left:140px;  height: 40px;  border-left:3px solid #e67300; margin-top:-30px;"></div>
<a href="contact.php" style=" text-decoration: none;color:black;  margin-left:40px;"><b>Contact Us</b></a>

</div>
<h3 style="margin-left:-350px; color:#e67300;">REQUEST A PROPOSAL</h3>
<p style="margin-left:-350px; margin-right:-350px;">Please complete the following form with as many details as possible regarding your event requirements.</p>

<hr style="width:800px;margin-left:-400px; margin-right:-350px;">

<h3 style="margin-left:-350px;">Contact Information</h3>

<!--form-->
<script>
<!--sname-->
function validateForm()
{
var x=document.forms["myForm"]["sname"].value;
if (x==null || x=="")
{
alert("Family Name/Surname must be filled out");
return false;
}

<!--fname-->
var x=document.forms["myForm"]["fname"].value;
if (x==null || x=="")
{
alert("First name must be filled out");
return false;
}

<!--email-->
var x=document.forms["myForm"]["email"].value;
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

<!--address-->
var x=document.forms["myForm"]["address"].value;
if (x==null || x=="")
{
alert("Address must be filled out");
return false;
}


<!--country-->
var country = document.forms["myForm"]["country"].value;

if(country == null || country ==""){
					alert ("Country must be selected");
					return false;
					}




<!--phone-->
//var x=document.forms["myForm"]["phoneno"].value;
//if (x==null || x=="")
//{
//alert("Phone Number must be filled out");
//return false;

//}
//var phoneno = /^\d{10}$/;
//if(inputtxt.value.match(phoneno))
//{
//return true;
//}
//else
//{
//alert("Not a valid Phone Number");
//return false;
//}




<!--event-->
var x=document.forms["myForm"]["event"].value;
if (x==null || x=="")
{
alert("Plese mention the event");
return false;
}


<!--event start-->
var x=document.forms["myForm"]["startd"].value;
if (x==null || x=="")
{
alert("Please mention the event start date");
return false;
}


<!--event end-->
var x=document.forms["myForm"]["endd"].value;
if (x==null || x=="")
{
alert("Please mention the event end date");
return false;
}


<!--Number of Attendees--> 
var x=document.forms["myForm"]["Attendees"].value;
if (x==null || x=="")
{
alert("Please mention the number of Attendees");
return false;
}


}


</script>

<div style="margin-left:-350px; margin-right:-390px;">
<table style="margin-top:-50px;">
<!--sname-->
<tr>
<form name="myForm" action="sendwedding.php" onsubmit="return validateForm()" method="post">
<td>Family Name/Surname* : </td>
<td><input type="text" name="sname" placeholder="Surname" style="width:150px;"></td> 

<!--fname-->
 
<td>First Name/Given Name* : </td>
<td><input type="text" name="fname" placeholder="First Name" ></td>
</tr>
 <br><br>

<!--email-->
<tr>
<td>Email* : </td>
<td><input type="text" name="email" style="width:150px;"></td>

<!--address-->  
<td>Address* : </td>
<td><input type="text" name="address" placeholder="Enter Your Address"></td>
</tr>
<br><br>

<!--country-->
<tr>


<td>Country/Region* : </td>
<td><select id ="selectcountry" name="country" style="width:150px;"> 
		<option value=""> -select country- </option>
		<option value="lanka">Sri Lanka</option>
		<option value="India">India</option>
		<option value="Australia">Australia</option>
		<option value="other">Other</option>
</select></td>


<!--phone-->

<td>Phone Number : </td>
<td><input type='text' name='phoneno'></td>
</tr>
</table>
<br><br><br><br>


<hr style="width:500px;margin-left:100px; margin-right:-350px;">

<h3 style="margin-left:10px;">Event Information</h3>


<!--event-->
<table style="margin-top:-100px;">
<tr>
<td>Event Name* : </td>
<td><input type="text" name="event"></td>
</tr>
<br><br>

<!--event start-->
<tr>
<label for="startd"><td>Event Start* : </td></label>
<td>  <input type="date" id="startd" name="startd" style="width:165px;"></td>
  	

<!--event end-->
  <label for="endd"><td>Event End* : </td></label>
 <td> <input type="date" id="endd" name="endd" style="width:164px;"></td>
  </tr>
 <br><br>
 
  
 <!--Event Category-->
 <tr>
<p><td>Event Category :</td>
<td><select name="Plese Select" style="width:165px;">
<option value="pSelect">Plese Select</option>
<option value="Wedding">Wedding</option>
<option value="ALBANIA">Birthday</option>
<option value="ALGERIA">Annual Dinner</option>
 </select></td> 
  
<!--Number of Attendees--> 
<td>Number of Attendees* : </td>
<td><input type="text" name="Attendees"></td></tr>
<br><br>

<!--Estimated Decision Date-->
<tr>

  <label for="Decision"><td>Estimated Decision Date : </td></label>
  <td><input type="date" id="Decision" name="Decision" style="width:165px;"></td></tr>
  </table>
<br><br><br><br>
  
<hr style="width:500px;margin-left:100px; margin-right:-350px;">

<h3 style="margin-left:10px;">Additional Information</h3> 
 
<p><b>Room Requirements</b></p>
 
 
  <p>Do you need any guestrooms? :
  <input type="radio" id="Yes" name="guestrooms" value="Yes">
  <label for="Yes">Yes</label>
  
  <input type="radio" id="No" name="guestrooms" value="No">
  <label for="No">No</label></p><br>

   
<p><b>Event Requirements</b></p>
 
  <p>Do you require function space? :
  <input type="radio" id="Yes" name="function" value="Yes">
  <label for="Yes">Yes</label>
  
  <input type="radio" id="No" name="function" value="No">
  <label for="No">No</label></p><br>

<p><b>Additional Requests</b></p>  
<textarea row="6" cols="50"></textarea>
<br><br><br><br>

<hr style="width:500px;margin-left:100px; margin-right:-350px;">
<br>

<input type="checkbox">
<label>By ticking this box, I agree to receive Meetings & Events marketing materials, promotional information, updates and more from Moody Moon International Hotel
 Management Limited via e-mail. I understand that I can withdraw my consent at any time without charge by following the unsubscribe instructions in the marketing
 communications regarding Meetings & Events or by emailing at unsubscribe@moodymoon.com</label>
 <p>If you would like to know more about how we treat your personal data, please see our Privacy Policy.</p>
  
  
  
<br><br><br>

<input type="Reset" value="Clear the form"/>
<input type="submit" name="submit" value="Submit" >


</form>
</div>

<script src="phoneno-all-numeric-validation.js"></script>

<br><br>

</form>
</div>


</div>


</body>
</html>