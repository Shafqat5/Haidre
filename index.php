<?php 
include 'db.php';
$result="";
if (isset($_POST['submit'])) {
	$name = test_input($_POST['name']);
	$email =test_input( $_POST['email']);
	$city =test_input( $_POST['city']);
	$phone = test_input($_POST['phone']);
}

$sql="INSERT INTO data(name,email,city,phone)VALUES('$name','$email','$city','$phone'";
if (mysqli_query($conn,$sql)) {
$result = "one recod insert Successfully!!!..";
	
}
else {
	$result = "something went wrong" .mysqli_errno($conn);
}
function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}




 ?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title> App</title>
	<link rel="stylesheet" href="boot/css/bootstrap.css">
	<link rel="stylesheet" href="boot/css/style.css">
	<link rel="stylesheet" href="boot/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="boot/css/animate.min.css">
	<link rel="stylesheet" href="boot/css/owl.theme.css">	
	<body bgcolor="dark">
	<div class="container">
		<div class="row p-2">
			<div class="col-lg-4 offset-lg-4 bg-light bg-light mt-4 p-3 rounded">
				<h3 class="text-center p-2">Inser Into Database</h3>
				<form action="" method="POST">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" placeholder="enter your name" required="required">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" placeholder="" required="required">
					</div>
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" name="city" class="form-control" placeholder="enter your city" required="required">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" name="phone" class="form-control" placeholder="enter your Phone" required="required">
					</div>
					<div class="form-group">
				
						<input type="submit" name="submit" value="Submitted" class="btn btn-primary btn-block">
					</div>
					<div class="form-group text-center">
						<a href="view.php" class="text-dark lead">View Records</a>
					</div>
					<div class="form-group text-center">
						<p class="lead"><?= $result; ?></p>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>