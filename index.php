<?php include_once "app/AutoLoad.php" ?>
<?php 
	$stu = new Student;
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
<?php 

	if(isset($_POST['save'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$uname = $_POST['uname'];
	if(empty($name)|| empty($email)|| empty($cell)|| empty($uname)){
		$mess = '<p class="alert alert-warning"> All Fied are Required ! <button class="close" data-dismiss="alert">&times;</button></p>';
	}else{
		$mess = $stu -> postMan($name,$email,$cell,$uname);
	}

	 
	

}
 ?>
<body>
	
	

	<div class="wrap">
		<a class="btn btn-info" href="table.php">All student</a>
		<div class="card shadow">
			<?php 
			if (isset($mess)) {
				echo $mess;
			}else{
				
			}

			
			 ?>
			<div class="card-body">
				<h2>Sign Up</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method ="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name = "name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name = "email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name = "cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name = "uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name = "save" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
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