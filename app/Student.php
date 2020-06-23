<?php 

	/**
	 * stuent mangae mant class
	 */
	class Student extends Db
	{
		/**
		 * value add to data base using postMan
		 */
		public function postMan($name,$email,$cell,$uname)
		{
			$sql = "INSERT INTO students (name,email,cell,username) VALUES ('$name','$email','$cell','$uname')";
			$data_send = parent::DbConnection() -> query($sql);
			if ($data_send) {
				return '<p class="alert alert-success"> Student add sucessful <button class="close" data-dismiss="alert">&times;</button></p>';
			}
		}
		/**
		 * value update to data base using postManUpdate
		 */
		public function postManUpdate($name,$email,$cell,$uname)
		{
			$sql = "UPDATE students SET name ='$name',email ='$email',cell ='$cell',username ='$uname'";
			$data_send = parent::DbConnection() -> query($sql);
			if ($data_send) {
				return "<p class=\"alert alert-success\"><b> $name </b> update sucessful <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}

		}
		/**
		 * add data get from database
		 */
		public function allStudent()
		{
			$sql = "SELECT * FROM students";
			$all_data = parent::DbConnection() -> query($sql);
			return $all_data;
		}
		/**
		 * delete data base on id
		 */
		public function distroy($id)
		{		$alart = "<p class=\"alert alert-info\"> number <b>$id</b>  is deleted <button class= \"close\" data-dismiss=\"alert\">&times;</button></p>";
			$sql = "DELETE FROM students WHERE id ='$id'";
			$data_send = parent::DbConnection() -> query($sql);
			if ($data_send) {
				return $alart;
			}
		}
		/**
		 * single dtudent edit
		 */
		public function singelStudent($id)
		{
			$sql = "SELECT * FROM students WHERE id = '$id'";
			$all_data = parent::DbConnection() -> query($sql);
			return $all_data;
		}


	}


 ?>