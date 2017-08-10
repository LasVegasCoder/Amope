<?php 
@Session::init();
	Session::destroy(); 
 echo '<h2>You\'ve been logged out successfully</h2>';
 print_r($_SESSION);

?>