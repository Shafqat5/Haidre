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
	<body class="bg-info">
		<div class="container">
		<div class="row">
		<div class="col-lg-10 ofset-lg-1 mt-3">
		<table class="table table-striped table-bordered bg-light">
		<thead>
				<tr class="bg-dark text-light text-center">
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>City</th>
					<th>Phone</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
		</thead>
		<tbody>
			<?php
			include 'db.php';
			$sql ="SELECT * FROM data";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
			?>
			<tr class="text-center">
				<td><?=$row['id']; ?></td>
				<td><?=$row['name']; ?></td>
				<td><?=$row['email']; ?></td>
				<td><?=$row['city']; ?></td>
				<td><?=$row['phone']; ?></td>
				<td><a class="btn btn-primary"  href="edit.php?id=<?= $row['id']; ?>">Edit</a></td>
				<td><a class="btn btn-danger" href="del.php?id=<?= $row['id']; ?>">Delete</a></td>
				
			</tr>
			<?php } } ?>
		</tbody>
		</table>
		</div>	
		</div>
		</div>
	

</body>
</html>