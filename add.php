<?php 
include 'attd.php';
include("db.php");
$flag=0;

if(isset($_POST['submit'])) {
	$result=mysqli_query($conn,"insert into attendence(st_name,st_dpt,st_roll)values('$_POST[st_name]','$_POST[st_dpt]','$_POST[st_roll]')");

	if ($result) {
	$flag=1;
	}
}


 ?>

<div class="jumbotron ">
<div class="container">
	
		<div class="card">
			<div class="item">
				<?php if($flag) { ?>
 	<div class="alert alert-success">
			
 		<strong>Success!</strong> Attendenece data successfully inserted!
 	</div>
 <?php } ?>

 	<div class="card-heading">
 		<h2>
 		<a  class="btn btn-success" href="add.php">ADD STUDENT</a>
 		<a class="btn btn-info float-right" href="index.php"> Back </a>
 	</h2>
 	</div>
 	<div class="card-body">
 		<form action="add.php" method="post">
 			<div class="form-group">
 			<label for="name">Student Name</label>
 	<input type="text" name="st_name"  class="form-control" required="required">		
 		</div>
 		<div class="form-group">
 			<label for="name">Student Department</label>
 	<input type="text" name="st_dpt"  class="form-control" required="required">		
 		</div>
 		<div class="form-group">
 			<label for="name">Student Roll No</label>
 	<input type="text" name="st_roll"  class="form-control" required="required">		
 		</div>
 		<div class="form-group">
 			
 	<input type="submit" name="submit" value="Submit" class="btn btn-primary" required="required">		
 		</div>
 		</form>
 		
 	</div>
 </div>

 </div>
</div>
</div> 