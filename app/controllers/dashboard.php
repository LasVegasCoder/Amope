<?php
defined('LIB_PATH') or die('Hacking attempt logged!');

class Dashboard extends Controller {

    public function __construct() {    
        parent::__construct();
        Session::Init();
	    
        $logged = Session::getSession('loggedIn');
	
        if($_SESSION['loggedIn'] !== true ){
		
            Session::destroy();
            header('location: login');
            exit;
        }
	else{
            $this->view->js = array('dashboard/scripts/load.js');
	}
    }
    
    public function Index(){
        $this->view->render('dashboard/index');
    }
    
    public function xhrInsert(){
        $this->model->xhrInsert();
    }

}
