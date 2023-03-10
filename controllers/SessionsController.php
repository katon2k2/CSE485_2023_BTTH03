<?php

	class SessionsController{
		private $logged; 
		// public function __construct($session){
			
		// 	$this->logged = $session ?? false;
		// }

		public function login($session){
			session_start();
		    session_regenerate_id(true);                         
		    $session = true;                       
		}

		public function logout($session){
		    $session = [];                                      
		    session_destroy();                                   
		}

		public function require_login(){
		    if (session_status() == PHP_SESSION_NONE){                           
		        return false;                                            
		    }
		    else
		    	return true;
		}
	}

?>