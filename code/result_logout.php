<?php 

require 'config.php';

$_SESSION = []; 
session_unset(); 
session_destroy(); 

header("Location: result_login.php");

?>