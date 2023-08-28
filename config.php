<?php

//Phase 2: Step # 5
$objDB = new mysqli('localhost', 'root', '', 'pescademy');

if($objDB->connect_errno){
    die('Connection failed');
}

?>