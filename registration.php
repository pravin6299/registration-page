<?php
	$con = mysqli_connect("localhost","root","","registration");

if(!$con){
	echo "connection failed";
}

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobail = $_POST['mobail'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

 $query = "insert into regi_data values('','$name','$email','$mobail','$user_name','$password')";

	mysqli_query($con,$query) or die(mysqli_error($con));
	header("loction:registration.php");

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration form</title>
</head>
<body bgcolor="#C0C0C0">
	<center>
		<form method="post">
	<header><b><marquee> Registration Form</marquee></header>
	<!-- <hr style="width: 25%;"> -->
	Name:
	<input type="name" name="name">
	<br><br>
	E-mail:
	<input type="email" name="email" required>
	<br><br>
	Mobail:
	<input type="text" name="mobail">
	<br><br>
	User name:
	<input type="text" name="user_name">
	<br><br>
	Password:
	<input type="password" name="password">
	<br><br>
	<input type="submit" name="submit" value="submit">
</center>
</form>
</body>
</html>