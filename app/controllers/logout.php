<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Logout extends Controller{

    public function __construct() {
        parent::__construct();
		
    }
    
    public function Index(){
	 Session::Init();
         if( isset($logged )?  Session::getSession('loggedIn') : [] ){
		 PRINT_R($_SESSION);
		}
		 Session::destroy();
        $this->view->render('logout/index');
    }
}
