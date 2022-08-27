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

  <img src="rd.jpg"  style="width:100%;opacity:0.6;">
  
 
  
  
  <div class="centered">
<?php

$con=mysqli_connect("localhost:3308","root","","finalproject"); 
 
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	} 
		
$records = mysqli_query($con,"select * from image"); // fetch data from database. get image from the table

while($data = mysqli_fetch_array($records))
{
	?>
	
<img style="margin-top:100px; " src="<?php echo $data['image']; ?>" width="60%" >
	
	<?php
}	

echo "<br>";
echo "<br>";

$sql = mysqli_query($con, "SELECT * FROM roombook ORDER BY id DESC LIMIT 1 ");
$print_data = mysqli_fetch_row($sql);
	
	echo "<span style='color:#006622;'><b>ROOM BOOK SUCCESSED</b></span>";
	echo "<br>";
	echo "<br>";
	echo "<span style='color:#006622;'><b>Thank you...</b></span>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<span style='color:#e67300;'><b>Arrival Date is : </b></span>";
	echo $print_data[1];//print the table first row 
	echo "<br>";
	echo "<br>";
	echo "<span style='color:#e67300;'><b>Departure Date is : </b></span>";
	echo $print_data[2];//print the table second row
	echo "<br>";
	echo "<br>";
	echo "<span style='color:#e67300;'><b>Number of guest : </b></span>";
	echo $print_data[3];//print the table third row
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<span style='font-size:25px;'> <a href='home.php'>Go back..</a> </span>";
	
	


?>

</div>
</div>
</body>
</html>