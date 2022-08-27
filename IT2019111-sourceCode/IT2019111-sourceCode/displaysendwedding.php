<!DOCTYPE html>
<html>

<style>
	
.container {
  position: relative;
  text-align: center;
  color: black;
  font-size:26px;
}
.centered {
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<body>

<div class="container">

  <img src="loimage1.JPG"  style="width:125%;opacity:0.6;">
  <div class="centered">
<?php


$con=mysqli_connect("localhost:3308","root","","finalproject"); 
 
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	} 

$sql = mysqli_query($con, "SELECT * FROM weddingbook ORDER BY id DESC LIMIT 1 ");
$print_data = mysqli_fetch_row($sql);
	echo "<br>";
	echo "<br>";
	echo "<span style='color:#e67300;'><b>Thank you </b></span>";
	echo"<span style='color:#e67300;'> $print_data[2]</span>";//print the table first row
    echo "<span style='color:#e67300;'><b>... </b></span>";	
	echo "<br>";
	echo "<br>";
	echo "<span style='color:#e67300;'><b>Your request Sending successed</b></span>";
	echo "<br>";
	echo "<br>";
	echo "<span style='color:#e67300;'><b>YOUR GOLDEN DAY ENJOY WITH US</b></span>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<span style='color:#e67300;'><b>Event Date is : </b></span>";
	echo "<span style='color:#e67300;'>$print_data[7]</span>";//print the table first row 
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<span style='font-size:25px;'> <a href='home.php'>Go back..</a> </span>";
	
	

$con->close();
?>

</div>
</div>
</body>
</html>