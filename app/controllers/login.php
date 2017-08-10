<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Login extends Controller{

    public function __construct() {
        parent::__construct();
    }
    
    public function Index(){
		if(Session::getSession('loggedIn') === FALSE) {
			Session::destroy();
		}
        $this->view->render('login/index');
    }
    
    public function run(){
        $this->model->run();
    }

}
