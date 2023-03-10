<?php
	require_once(PATCH_ROOT . "/services/UserService.php");
	require_once(PATCH_ROOT . "/services/ArticleService.php");
	class AdminController{
	    public function index(){
	    	$us = new UserService();
	    	$as = new ArticleService();
	        include(PATCH_ROOT_ADMINCONTROLLER .  "/views/admin/index.php");
	    }
	}
?>