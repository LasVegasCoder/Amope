<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
// define constants

define('URL', 'http://localhost/ads/');

define('APP_PATH', realpath( DIRNAME(__FILE__)) . '/libs/');

define('LIB_PATH', realpath( DIRNAME(__FILE__)) . '/libs/');
define('CONFIG_PATH', DIRNAME(__FILE__) .  '/config/');


require LIB_PATH . 'Controller.php';
require LIB_PATH . 'Session.php';
require LIB_PATH . 'Model.php';
require LIB_PATH . 'View.php';
require LIB_PATH . 'Bootstrap.php';

require CONFIG_PATH . 'database.php';

