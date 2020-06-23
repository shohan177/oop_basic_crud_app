<?php 

	abstract class Db
	{
		private $server = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $db = 'oop';

		private $con;

		protected function DbConnection()
		{
			$this -> con = new mysqli($this -> server,$this -> user,$this -> pass, $this -> db);
			return $this -> con;
		}
		


	}


 ?>