<?php
	defined('APP_PATH') OR die('Your hacking attempt was logged for ip ' . $_SERVER['REMOTE_ADDR'] );


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Database extends PDO {

    function __construct() {
        parent::__construct('mysql:host=localhost;dbname=vinpro', 'root','traffic');
    }

}
