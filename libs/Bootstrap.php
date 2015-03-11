<?php

class Bootstrap {

    function __construct() {
        
        $url = isset($_GET['url'])? $_GET['url']:null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        
        $controller = $url[0];
        $action = $url[1];
        $value = $url[2];

        
        if (empty($controller)) {
            require 'controllers/index.php';
            $control = new Index();
            $control->index();
            return false;
        }
        
        $file = 'controllers/' . $controller . '.php';
        
        if (file_exists($file)) {
            require $file;
        }  else {
            $this->error();
        }
        $control = new $controller;

        if (isset($value)) {
            $control->{$action}($value);
        } else {
            if (isset($action)) {
                $control->{$action}();
            }  else {
                $control->index();
            }
        }
        
        
        
        
    }
    public function error(){
		require 'controllers/error.php';
		$control = new Error();
		$control->index();
		return false;
	   }  

}
