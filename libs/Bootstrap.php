<?php 

	$controller = isset($_GET['c']) ? $_GET['c']:'home';
	$action = isset($_GET['a'])? $_GET['a']:'index';


	$filename = CONTROLLER.$controller.'.php';
	if(file_exists($filename)){
		require_once($filename);
		$controller = new $controller();
		if(method_exists($controller,$action)){
			$controller->{$action}();
		}
	}

?>