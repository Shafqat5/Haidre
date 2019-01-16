<?php 
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM data WHERE id='$id'";
if (mysqli_query($conn,$sql)) {
	header("location:view.php");
	

}
else{
	echo "something went wrong";
}



 ?>