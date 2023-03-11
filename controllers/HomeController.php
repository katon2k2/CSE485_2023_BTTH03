<?php
	include(PATCH_ROOT . "/services/ArticleHomeService.php");
	class HomeController{
	    public function index(){

			//tương tác với service
			$articleHomeService = new ArticleHomeService();
			$articlehome = $articleHomeService->getAllArticleHome();
			//tương tác với view 
	        include(PATCH_ROOT . "/views/home/index.php");
	    }
	}
?>