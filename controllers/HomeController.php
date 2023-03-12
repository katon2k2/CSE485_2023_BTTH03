<?php
	include(PATCH_ROOT . "/services/ArticleHomeService.php");
	class HomeController{
	    public function index($twig){

			
			//tương tác với service
			$articleHomeService = new ArticleHomeService();
			$articlehome = $articleHomeService->getAllArticleHome();
			$data = $articlehome;
			//tương tác với view 
			
			echo $twig->render('home/home.twig', [
				'articlehome' => $data]);
	        // include(PATCH_ROOT . "/views/home/home.twig");
	    }
	}
?>