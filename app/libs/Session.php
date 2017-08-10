<?php
	defined('APP_PATH') OR die('Your hacking attempt was logged for ip ' . $_SERVER['REMOTE_ADDR'] );

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Session {

    function __construct() {
        //
    }
    
    public static function init(){
        @session_start();
    }
    
    public static function setSession($key, $value){
            $_SESSION[$key] = $value;
    }
    
    public static function getSession($key){
        if(isset($_SESSION[$key])){
			return $_SESSION[$key];
        }
    }
    
    public static function destroy(){
        session_destroy();
    }

}
