<?php
			include 'db.php';
			$id = $_GET['id'];
			$sql ="SELECT * FROM data WHERE id ='$id'";
			$result=mysqli_query($conn,$sql);
			
			$row=mysqli_fetch_assoc($result);

			if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email =$_POST['email'];
	$city =$_POST['city'];
	$phone = $_POST['phone'];
	$sql = "UPDATE data SET name='$name', email='$email',city='$city',phone='$phone' WHERE id='$id'";
	if (mysqli_query($conn,$sql)) {
		header("location:view.php");
	}
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
	<body class="bg-light">
	<div class="container">
		<div class="row p-2">
			<div class="col-lg-4 offset-lg-4 bg-light bg-light mt-4 p-3 rounded">
				<h3 class="text-center p-2">Edit & Save In Database</h3>
				<form action="" method="POST">
					<div class="form-group">
				<label for="name">Name</label>
	<input type="text" name="name" class="form-control" value="<?= $row['name']; ?>"  required="required">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" value="<?= $row['email']; ?>"   required="required">
					</div>
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" name="city" class="form-control" value="<?= $row['city']; ?>" required="required">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
<input type="text" name="phone" class="form-control" value="<?= $row['phone']; ?>"   required="required">
					</div>
					<div class="form-group">
				
						<input type="submit" name="submit" value="update" class="btn btn-primary btn-block">
					</div>
					<div class="form-group text-center">
						<a href="index.php" class="text-dark lead">Add Records</a>
					</div>
			
				</form>
			</div>
		</div>
	</div>


</body>
</html>