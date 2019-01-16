<?php 
include 'db.php';
include 'attd.php';
?>

 <div class="panel panel-default">
 	<div class="panel panel-heading">
 			<h2>
 		<a  class="btn btn-success" href="add.php">ADD STUDENT</a>
 		<a class="btn btn-info float-right" href="index.php"> Back </a>
 	</h2>
 	
 	<div class="panel panel-body">
 		<form action="aview.php" method="post">
 			<table class="table table-striped">
 				<thead>
				<tr class="bg-dark text-light text-center table-bordered bg-light">
					<th>#Serial Number</th>
					
					<th>Date</th>
					<th>Show Attendence</th>

					





					
				</tr>
			</thead>
		

		<?php 

		$result=mysqli_query($conn,"select distinct date from attd_record");
		$serialnumber=0;
	while($row=mysqli_fetch_array($result)){
			$serialnumber++;

			?>
			<tr>
		 <td><?php echo $serialnumber; ?></td>
		 <td> <?php echo $row['date'] ?> </td>
		 <td>
		 	<form action="show_attd.php" method="POST">
		 		<input type="hidden" value="<?php echo $row['date']?>" name="date">
		 		<input type="submit" value="Show Attendence" class="btn btn-primary">
		 	</form>
		 </td>
		 <?php } ?>
	
		 		</tr>
	
 			</table>

 			<tr><td>

 			<input type="submit" name="submit" value="submit" class="btn btn-primary">
 		</td>
 	</tr>

 		</form>

 	</div>
 	</div>
 </div>




