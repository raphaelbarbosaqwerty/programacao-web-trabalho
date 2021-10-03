<?php
	header('Content-Type: application/json');
	
	require '../vendor/autoload.php';
	use App\Controllers\NewsController;
	
	if($_GET['url']) {
		$url = explode('/', $_GET['url']);

		if($url[0] === 'api') {
			array_shift($url);
			$controller = 'App\Controllers\\'.ucfirst($url[0]).'Controller';
			array_shift($url);
			$method = $_SERVER['REQUEST_METHOD'];
			
			try {
				http_response_code(200);
				$response = call_user_func_array(array(new $controller, $method), $url);
				echo json_encode(array('status' => 'success', 'data' => $response));
				exit;
			} catch(\Exception $e) {
				http_response_code(400);
				echo json_encode(array('status' => 'error', 'data' => $e->getMessage()), JSON_UNESCAPED_UNICODE);
				exit;
			}
		}
	}