<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function run() {
	  if( $_POST['username'] && $_POST['password'] ){
		$username = preg_replace('/[^a-z0-9.]/','', $_POST['username'] );
		$password = preg_replace('/[^a-z0-9.]/','', $_POST['password'] );
	  }
	
        $stm = $this->db->prepare("SELECT user_id
                        FROM vin_user
                        WHERE username = :username
                        AND password =md5(:password)");
        $stm->execute(array(
            ':username' => $username,
            ':password' => $password
        ));

        //$data = $stm->fetchAll();
        $count = $stm->rowCount();
        if ($count == 1) {
            Session::init();
            Session::setSession('loggedIn', true);
			
			//SetCookies
			setcookie( $username, 'cookie_value', time()+ 3600 , '/' );
            header('location: ../dashboard');
        } else {
			Session::destroy();
            header('location: ../login');
            echo 'Login Failed';
			exit();
        }
    }

}
