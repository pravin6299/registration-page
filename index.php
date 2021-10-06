<?php
$con= mysqli_connect("localhost","root","","students");


if(!$con){
	echo "error";
}
if(isset($_POST['submit']))
{
	$name = $_POST['Name'];
	$user_name = $_POST['User_name'];
	$Password = $_POST['Password'];

	$query="insert into stu_datas values('','$name','$user_name','$Password')";

	 mysqli_query($con,$query) or die(mysqli_error($con));
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login page</title>
</head>
<body>
<center>
	<header><b>Login page</b></header>
	<hr style="width: 20%;">
	<form method="post">
		Name:
		<input type="text" name="Name">
		<br><br>
		User_name:
		<input type="user_name" name="User_name">
		<br><br>
		Password:
		<input type="Password" name="Password">
		<br><br>
		<input type="submit" name="submit" valuse="submit">
	</form>

</center>
</body>
</html>