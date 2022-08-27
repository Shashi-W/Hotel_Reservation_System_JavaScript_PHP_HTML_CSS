<!DOCTYPE html>
<html>

<body>

<?php

	$con=mysqli_connect("localhost:3308","root","","finalproject");
	
	if (mysqli_connect_errno()) 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}

$sql="INSERT INTO roombook (date,dated,guest)
 VALUES ('$_POST[date]','$_POST[dated]','$_POST[guest]')"; 
 if (!mysqli_query($con,$sql)) { 
 die('Error: ' . mysqli_error($con)); 
 } 
else{
	include 'displaysendroom.php';
	
}

 
 
 
?>

</body>
</html>