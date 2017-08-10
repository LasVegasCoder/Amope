<?php 
@session_start();
if($_SESSION['loggedIn'] !==TRUE){

	session_destroy();
}
?>

d a s h b o a r d
<hr />
<h4> Random Inserts </h4>

<form id ="justAForm" action ='dashboard/xhrInsert' method='post'>
    <input type ="text"  id ="test" name ="testInsert" />
    <br /><input type ="submit" name="submit" />
         
</form>