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
					<th>Student Name</th>
					<th>Student Department</th>
					<th>Student Roll No</th>
					<th>Student Status</th>
</tr>
			</thead>
		
<?php 
$result=mysqli_query($conn,"select * from attd_record where date='$_POST[date]'");
		$serialnumber=0;
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$serialnumber++;
		?>	
			<tr>
		 <td><?php echo $serialnumber; ?> </td>
		 <td> <?php echo $row['st_name']; ?> </td>
		 <td> <?php echo $row['st_dpt']; ?> </td>
		 <td> <?php echo $row['st_roll']; ?> </td>
		 <td> <?php echo $row['date']; ?> </td>
		 
		 <td>

	<input type="radio" name="st_status[<?php echo $counter; ?>]" 
	<?php if ($row['st_status']=="present") 
	echo "checked=checked";
	 ?>
	value="present">Present
	<input type="radio" name="st_status[<?php echo $counter; ?>]" value="absent"
	<?php if ($row['st_status']=="absent") 
	echo "checked=checked";
	 ?>
	>Absent	
		 		 </td>
		 		</tr>
<?php $counter++;  }  ?>
	
 			</table>
 			<tr><td>
 			<input type="submit" name="submit" value="submit" class="btn btn-primary">
 		</td>
 	</tr>

 		</form>

 	</div>
 	</div>
 </div>




