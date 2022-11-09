<?php

$con = mysqli_connect("localhost","root","","mini");
if(!$con){
  die("Failed to connect : ".$con->connect_error);
}
if(isset($_POST['submit']))
{
	$sname = $_POST['RollNumber'];
	$sql="DELETE FROM `student` WHERE RollNumber='$sname'";
	$run=mysqli_query($con,$sql);
	if($run)
	{
              header("location:alert2.php");
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	
}
?>