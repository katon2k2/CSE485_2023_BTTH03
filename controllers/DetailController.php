<?php
	require_once(PATCH_ROOT . "/services/DetailService.php");
	
	class DetailController{
	    public function index(){

			//tương tác với service
			$detailService = new DetailService();   
			$detail = $detailService->__construct();
			//tương tác với view 
	        include(PATCH_ROOT . "/views/detail/detail.php");
	    }
	}
?>