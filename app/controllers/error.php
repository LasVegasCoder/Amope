<?php

class Error extends Controller {

    public $ap_err;

    function __construct() {
        parent::__construct();
    }
    
    public function Index(){
        return $this->ap_err;
    }

    public function this_Error($msg = null) {
        //check to see if any error is set;
        if (($msg != "") && (isset($msg))) {
            $this->ap_err = $msg;
        } else {
            $this->ap_err = 'This is Default ERROR MESSAGE!';
        }

        $this->view->msg = '<h4>Tada You are @Error Mode</h4>';
        $this->view->msg .='<p>' . $this->ap_err . '</p>';
        $this->view->msg .= '<hr />';
        $this->view->render('error/index');
        //return $this->ap_err;
        return false;
    }

}