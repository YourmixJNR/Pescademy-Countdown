<?php

session_start();

// Establish connection to database

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pescademy';

$objDB = new mysqli($hostname, $username, $password, $database);

if($objDB->connect_errno){
    die('Connection failed');
}

// PHPMailer
require_once 'PHPMailer-master/PHPMailerAutoload.php';

// Access send_mail.php
require_once 'send_mail.php';

?>