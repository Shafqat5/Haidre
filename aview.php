<?php 
include 'db.php';
include 'attd.php';
$flag=0;
$update=0;
if (isset($_POST['submit'])) {

	$date =(date("Y-M-d h:i:s"));
	$records=mysqli_query($conn,"select * from attd_record where date='$date'");
	$num=mysqli_num_rows($records);
	if ($num) {
			foreach($_POST['st_status'] as $id=>$st_status) {
		$student_name=$_POST['student_name'][$id];
		$roll_number=$_POST['roll_number'][$id];
		

	$result=mysqli_query($conn,"update attd_record set st_name='$st_name',status='$status',date='$date' where date='$date';");
		if ($result){

			$update=1;
		}
	
}
	
	}

	else
	{
	foreach($_POST['st_status'] as $id=> $st_status) {
		$st_name=$_POST['st_name'][$id];
		$st_roll=$_POST['st_roll'][$id];
		

	$result=mysqli_query($conn,"insert into attd_record(st_name,st_roll,st_status,date)values('$st_name',$st_roll','$st_status',NOW())");
		if ($result) {
			$flag=1;
		}
	}
}

}
?> 

 <div class="panel panel-default">
 	<div class="panel panel-heading">
 			<h2>
 		<a  class="btn btn-success" href="add.php">ADD STUDENT</a>
 		<a class="btn btn-info float-right" href="view_all.php"> View All </a>
 	</h2>

 	<?php if($flag==0) { ?>
 	<div class="alert alert-success">
 		insert date successfully!
 	</div>
 	<?php } ?>
 	<?php if($update==0) { ?>
 	<div class="alert alert-success">
 		update student date successfully!
 	</div>
 	<?php } ?>
 	<h2><div class="card text-center"> <?php echo date("Y-M-d") ?></div></h2> 
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

		$result=mysqli_query($conn,"select * from attendence");
		$serialnumber=0;
		$counter=0;
		while($row=mysqli_fetch_array($result)){
			$serialnumber++;

			?>
			<tr>
		 <td><?php echo $serialnumber; ?></td>
		 <td> <?php echo $row['st_name']; ?>
		 <input type="hidden" value="<?php echo $row['st_name']; ?>" name="st_name[]">
		 </td>
		 <td> <?php echo $row['st_dpt']; ?>
		 	<input type="hidden" value="<?php echo $row['st_dpt']; ?>" name="st_dpt[]">
		 </td>
		 <td> <?php echo $row['st_roll']; ?>
		 <input type="hidden" value="<?php echo $row['st_roll']; ?>" name="st_roll[]">
		 </td>
		 <td>
	<input type="radio" name="st_status[<?php echo $counter; ?>]" value="present">Present
	<input type="radio" name="st_status[<?php echo $counter;  ?>]" value="absent">Absent	
		 		 </td>
		 		</tr>
<?php $counter++; }  ?>
	
 			</table>
 			<tr><td>
 			<input type="submit" name="submit" value="submit" class="btn btn-primary">
 		</td>
 	</tr>

 		</form>

 	</div>
 	</div>
 

</div>


