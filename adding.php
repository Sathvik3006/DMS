<?php

$con = mysqli_connect("localhost","root","","mini");
if(!$con){
  die("Failed to connect : ".$con->connect_error);
}
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$des = $_POST['des'];
	$mail = $_POST['mail'];
	$num = $_POST['num'];
	$unam = $_POST['unam'];
	$pass = $_POST['password'];
	$sql="INSERT INTO `faculty`(`UserName`, `Password`, `Name`, `Designation`, `Email ID`, `Mobile Number`) VALUES ('$unam','$pass','$name','$des','$mail','$num')";
	$run=mysqli_query($con,$sql);
	if($run)
	{
		header("Location:alert.php");
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
}
?>