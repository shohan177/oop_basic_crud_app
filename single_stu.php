<?php include_once "app/AutoLoad.php" ?>
<?php 
	$stu = new Student;

		if (isset($_GET['id'])) {
				$Sdata = $stu -> singelStudent($_GET['id']);

				$oldinfo = $Sdata -> fetch_assoc();

				
			}
			
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $oldinfo['name'] ?></title>
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
		$mess = $stu -> postManUpdate($name,$email,$cell,$uname);
	}

	 
	

}
 ?>
<body>
	
	

	<div class="wrap">
		
		<div class="card shadow">
			<?php 
			if (isset($mess)) {
				echo $mess;
			}else{
				
			}

		
			 ?>
			<div class="card-body">
				<h2><?php echo $oldinfo['name'] ?></h2>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $id = $_GET['id'];?>"  method ="POST">
					<div class="form-group">
						<label for="">Name: <?php echo $oldinfo['name']?> </label>
						
					</div>
					<div class="form-group">
						<label for="">Email: <?php echo $oldinfo['email']?></label>
						
					</div>
					<div class="form-group">
						<label for="">Cell: <?php echo $oldinfo['cell']?></label>
						
					</div>
					<div class="form-group">
						<label for="">Username: <?php echo $oldinfo['username']?></label>
						
					</div>
					<div class="form-group">
						<a class="btn btn-info btn-sm" href="table.php"> Back </a>
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