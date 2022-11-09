<?php

$con = mysqli_connect("localhost","root","","mini");
if(!$con){
  die("Failed to connect : ".$con->connect_error);
}
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$rno = $_POST['RollNo'];
	$sec = $_POST['section'];
	$mail = $_POST['email'];
	$num = $_POST['num'];
	$attendance = $_POST['att'];
	$CGPA = $_POST['cgpa'];
	$abs = $_POST['abs'];
	$pbs = $_POST['pbs'];
	$sql="UPDATE `student` SET `Name`='$name',`RollNumber`='$rno',`section`='$sec',`mail`='$mail',`mobilenum`='$num',`attendance`='$attendance',`cgpa`='$CGPA',`abs`='$abs',`pbs`='$pbs' WHERE `RollNumber`='$rno' ";
	$run=mysqli_query($con,$sql);
	if($run)
	{
              header("location:alert5.php");
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	
}
?>