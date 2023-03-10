<?php
	class PdoConnect{
		private $conn = null;

		public function __construct(){
			try{
				$this->conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root','');
			}
			catch(PDOException $e){
				echo $e->getMessage();
			}
		}

		public function getConnect(){
			return $this->conn;
		}
	}
?>