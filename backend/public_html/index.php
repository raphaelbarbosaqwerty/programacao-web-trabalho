<?php
	require '../vendor/autoload.php';
	use App\Controllers\NewsController;
	
	if($_GET['url']) {
		$url = explode('/', $_GET['url']);

		if($url[0] === 'api') {
			$controller = 'App\Controllers\\'.ucfirst($url[1]).'Controller';
			$method = $_SERVER['REQUEST_METHOD'];
			
			try {

				$test = NewsController::get(1);
			} catch(\Exception $e) {

			}
		}
	}