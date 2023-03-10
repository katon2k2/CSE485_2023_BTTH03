<?php
	require_once(PATCH_ROOT . "/services/UserService.php");
	require_once(PATCH_ROOT . "/services/ArticleService.php");
	class AdminController{
	    public function index($twig){
	    	$us = new UserService();
	    	$as = new ArticleService();
	        echo $twig->render('admin/index.twig', [
	        	'numberUser' => $us->getNumbersUser(),
	        	'numberArticle' => $as->getNumbersArticle()
	        ]);
	    }
	}
?>