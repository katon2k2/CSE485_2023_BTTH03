<?php

	class User{
		private string $userName;
		private string $password;

		public function __construct($userName, $password){
			$this->userName = $userName;
			$this->password = $password;
		}

		public function getUserName(){
			return $this->userName;
		}

		public function getPassword(){
			return $this->password;
		}
	}

?>