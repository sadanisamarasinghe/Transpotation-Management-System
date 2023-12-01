<?php

//start session
session_start();
//create constraints to store non repeatig values
define('SITEURL', 'http://localhost/php/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'php');


$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn)); //database connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); //selecting database
?>