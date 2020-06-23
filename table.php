<?php include_once "app/AutoLoad.php" ?>
<?php 
	$stu = new student;
	if (isset($_GET['id'])) {
		$mess = $stu -> distroy($_GET['id']);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table">
		<a class="btn btn-info" href="index.php">Add New</a>
		<div class="card shadow">
			<div class="card-body">
				<?php 
				if (isset($mess)) {
					echo $mess;
				}

				 ?>
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>uname</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$id = 1;
							$all_stu = $stu -> allStudent();

							
							while( $each = $all_stu -> fetch_assoc()):
						 ?>
						<tr>

							<td><?php echo $id++ ?></td>
							<td><?php echo $each['name']; ?></td>
							<td><?php echo $each['email']; ?></td>
							<td><?php echo $each['cell']; ?></td>
							<td><?php echo $each['username']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="single_stu.php?id=<?php echo $each['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $each['id']; ?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?id=<?php echo $each['id']; ?>">Delete</a>
							</td>
						</tr>
						
						<?php endwhile; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>