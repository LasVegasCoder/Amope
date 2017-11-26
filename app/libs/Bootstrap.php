<?php

/*
 *  @Author 	: Prince Adeyemi
 *  @Desc	: Amope is a PHP Framework designed to generate a fully working website based on user's specification and design while 
 		  focusing on security, durability, portability and availability of data as deemed necessary.  Result is a responsive
		  dynamic website cross-compability with Mobile Phones, Tablets, iOS, Android and Desktop PCs in a minute.
 *  @Note	: Dedicated to my mom ─ may her soul R.I.P 
 */

class Bootstrap {

    function __construct() {
        //$url = (isset($_GET['url'])) ? explode('/', strip_tags(rtrim($_GET['url'], '/'))) : null;
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //print_r($url);
        //load default index 
        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->Index();
            return false;
        }
	
        $file = 'controllers/' . $url[0] . '.php';

        //check to see if file exist, then load it otherwise throw error

        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/error.php';
				$controller = new Error();
				echo $controller->this_Error('undefined error has occured!');
            return;
        }

        $controller = new $url[0];
        $controller->loadModel($url[0]);

//check if sub-url is set
        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
            return;
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
                return;
            } else {
                $controller->Index();
            }
        }
    }

}
