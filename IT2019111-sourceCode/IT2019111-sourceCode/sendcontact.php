<!DOCTYPE html>
<html>

<body>

<?php

	$con=mysqli_connect("localhost:3308","root","","finalproject");
	
	if (mysqli_connect_errno()) 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}


		
$sql="INSERT INTO contact (name, email, subject, message)
 VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')"; 
 if (!mysqli_query($con,$sql)) { 
 die('Error: ' . mysqli_error($con)); 
 } 
else{
	include 'displaycontact.php';
	
}
 
 
 mysqli_close($con);


?>

</body>
</html>