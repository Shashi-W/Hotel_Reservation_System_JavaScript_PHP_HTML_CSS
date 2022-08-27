<!DOCTYPE html>
<html>

<body>

<?php

	$con=mysqli_connect("localhost:3308","root","","finalproject");
	
	if (mysqli_connect_errno()) 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}

$sql="INSERT INTO weddingbook (sname,fname,email,address,country,event,startd,endd,Attendees)
 VALUES ('$_POST[sname]','$_POST[fname]','$_POST[email]','$_POST[address]','$_POST[country]','$_POST[event]','$_POST[startd]','$_POST[endd]','$_POST[Attendees]')"; 
 if (!mysqli_query($con,$sql)) { 
 die('Error: ' . mysqli_error($con)); 
 } 
else{
	include 'displaysendwedding.php';
	
}

 
 
 
?>

</body>
</html>