<?php
	require_once(PATCH_ROOT . "/services/DetailService.php");
	
	class DetailController{
	    public function index($twig){

			//tương tác với service
			$detailService = new DetailService();   
			$detail = $detailService->__construct();
			$data = $detail;
			//tương tác với view 
	        echo $twig->render('detail/detail.twig', [
				'detail' => $data]);
	    }
	}
?>