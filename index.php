<?php

	define('PATCH_ROOT', dirname(__FILE__, 1));

	require_once PATCH_ROOT . '/vendor/autoload.php';

	$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
	$action = isset($_GET['action']) ? $_GET['action'] : 'index';

	$controller = ucfirst($controller) . "Controller";
	
	$controllerPath = PATCH_ROOT . "/controllers/". $controller .".php";

	if(!file_exists($controllerPath)){
		echo "missing file";
	}
	else{
		require_once($controllerPath);	
	}

	$loader = new \Twig\Loader\FilesystemLoader('views');
	$twig = new \Twig\Environment($loader);

	$myObj = new $controller();

	$myObj->$action($twig);

?>