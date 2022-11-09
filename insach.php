<?php

$con = mysqli_connect("localhost","root","","mini");
if(!$con){
  die("Failed to connect : ".$con->connect_error);
}
if (isset($_POST['submit'])) {
	$achie = $_POST['achie'];
	$id = $_POST['id'];
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf3/".$pdf;

          move_uploaded_file($pdf_tem_loc , $pdf_store);
	
	 $sql="INSERT INTO `achi`(`Id`,`achieve`,`pdf`) VALUES ('$id','$achie','$pdf')";
	$run=mysqli_query($con,$sql);
	if($run)
	{
		header("Location:alertac.php");
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
}
?>
