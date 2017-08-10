<?php
	defined('APP_PATH') OR die('Your hacking attempt was logged for ip ' . $_SERVER['REMOTE_ADDR'] );

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class View {

    function __construct() {
        // echo "<p>Hey you are in the view </p>";
        }

        public function render($name, $notpl = false) {
        $view = 'views/' . $name . '.php';
        if ($notpl == true) {
            require @$view;
        } else {

            if (file_exists(@$view)) {
                require 'views/header.php';
                require $view;
                require 'views/footer.php';
            }
        }
    }
}

?>
