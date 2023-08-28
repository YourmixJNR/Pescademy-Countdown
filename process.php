<?php

require_once 'config.php';

// Check if the subscribe button is clicked
if(isset($_POST['subscribe'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $objDB->query("INSERT INTO subscribers (email) VALUES ('$email')");
}

?>