<?php

class Help extends Controller {

    public function __construct() {
        parent::__construct();
        //echo '<br />We are inside help controller';
    }
    
    public function Index(){
        $this->view->render('help/index');
    }

    public function other($var = false) {
        echo '<br /> we are inside others';
        echo '</br /> Option: ' . $var;

        require 'models/Help_Model.php';
        $model = new Help_Model();
    }

}