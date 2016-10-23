<?php   
if (isset($_GET['action']) && $_GET['action']=='logout'){

session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
unset($_SERVER);


header("location:/~garg6849/portfolio/index.php"); 
 
}
?>