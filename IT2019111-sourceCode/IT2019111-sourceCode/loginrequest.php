<!DOCTYPE html>
<html>
<head>
<title>Moody moon login page</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"href="style.css">

<style>

body{
	
  background-image: url('lbackground.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

</style>

</head>

<body>

<div>
<img src="loimage1.JPG" style="width:900px; height:500px; margin-top:150px; margin-left:300px; opacity:0.9;">
</div>
  
<h4 style="margin-left:360px; margin-top:-460px; position:absolute;">MOODY MOON</h4>
<p style="margin-left:380px;  margin-top:-430px; position: absolute;"><i>Hotel & Resorts ...Enjoy Your Life...</i><p>
<!--<p style="margin-left:400px;position: absolute;"><i></i></p>-->




<!--login-->
<?php

	$con=mysqli_connect("localhost:3308","root","","finalProject");
	
	if (mysqli_connect_errno()) 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}


if(!isset($_POST["login"]) && !isset($_POST["create"]))   {
$error = "Username or Password is invalid";

?>


<form name="Userform" method="post" action="loginrequest.php" align="center" style="color:black;margin-left:800px; margin-top:-400px;position:absolute;">

<p style="color:#e69900;margin-top:-80px; margin-left:110px; font-size:30px; position:absolute;"><b>Login</b></p>

 Username:<br>
 <input type="text" name="username" style="width:300px; height:34px;" placeholder="Username" pattern="[a-zA-Z0-9]+" required />
 <br><br><br>
 Password:<br>
<input type="password" name="password" style="width:300px; height:34px;"  placeholder="Password" required />
<br>


<br><br>

<button type="submit" name="login" style="background-color:#00004d; color: white; padding: 7px 10px; width:300px;">Login</button>

<br><br>
<input type="reset" class="btn" style="background-color:#0000b3; color: white;padding: 7px 10px;" value="Clear the form"/>

<input type="submit" name="create" id="create" value="Create New" style="background-color:#0000b3; color: white; padding: 7px 10px;" /> 

</form>
	   
	   
  </div>
</div>

<?php
}
else {
	
	$username = $_POST["username"]; 	
	$password = $_POST["password"];	
	
	
	
	
if (isset($_POST["login"])){   //check the user password and username
		
			$sql = "SELECT * FROM login WHERE username='$username' AND password = '$password'";
			$result = $con->query ($sql);
			
			if ($result -> num_rows > 0){
				while($row = $result -> fetch_assoc()){
				    echo "Welcome" . "" . $row["username"] . "<br>";
					
					header('Location:request.php');
				}
				
			}
		else {
				echo "<span style=' position:absolute; color:red; font-size:20px; margin-left:550px; margin-top:-300px; font-weight: 1000; text-align:center;'> You are not a valid user !!! <a href='loginrequest.php'>Click here to try again..</a> </span>";
						
			}
		}
	
   


if(isset($_POST['create'])) { //create new
	$sql = "INSERT INTO login(username, password)
			VALUES('$username','$password')";

	if ($con->query($sql) === TRUE) {
    header ('Location:request.php');
	} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
	}
	
$con->close(); 		
}

?>




</body>
</html>