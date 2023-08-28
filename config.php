<?php

// Establish connection to database

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pescademy';

$objDB = new mysqli($hostname, $username, $password, $database);

if($objDB->connect_errno){
    die('Connection failed');
}

?>