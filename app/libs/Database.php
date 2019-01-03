<?php
defined('APP_PATH') OR die('Your hacking attempt was logged for ip ' . $_SERVER['REMOTE_ADDR'] );

/*
 * Database class, extends PDO
 * To do : Use Singleton .
 */
class Database extends PDO {

    function __construct() {
        parent::__construct('mysql:host=localhost;dbname=databaseName', 'user','PASSWORD');
    }

}
