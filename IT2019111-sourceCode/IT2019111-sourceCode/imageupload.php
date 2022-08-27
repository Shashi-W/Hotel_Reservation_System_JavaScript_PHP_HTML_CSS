<html>
<head>


</head>

<body>

<!--form for upload the image-->
	<h1> Upload image </h1>
	
	<form action="" method="post" enctype="multipart/form-data">
	<lable> Chooce an image </lable>
	<input type="file" name="image" id="image" />  <br>
	
	<input type="submit" name="upload" value="upload">
	</form>
	


</body>
</html>


<?php

	
	
	
  // Create database connection
  $db = mysqli_connect("localhost:3308", "root", "", "finalproject");

 

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	
  	

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO image (image) VALUES ('$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
 
	
	?>