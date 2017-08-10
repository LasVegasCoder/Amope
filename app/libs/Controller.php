<?php
	defined('APP_PATH') OR die('Your hacking attempt was logged for ip ' . $_SERVER['REMOTE_ADDR'] );

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller {

    function __construct() {
		@Session::Init();
         $logged =  isset( $_SESSION['loggedIn'] ) ?  Session::getSession('loggedIn') : [] ;
		
        $this->view = new View;
    }
    
    

    public function loadModel($name) {
        $path = 'models/' . $name . '_Model.php';
        
        if(file_exists($path)){
            require $path;
            
            $modelName = $name .'_Model';
            $this->model = new $modelName;
        }
    }

}
