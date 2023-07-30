<?php

session_start();
$con=mysqli_connect("localhost", "root", "", "srms");

if(!$con){
    die(mysqli_error());
}

?>