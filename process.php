<?php

require_once 'config.php';

// Check if the subscribe button is clicked or set
if(isset($_POST['subscribe'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $objDB->query("INSERT INTO subscribers (email) VALUES ('$email')");

    // Display Subscribe successfully message

    $_SESSION['msg'] = "Subscribe successfully 😎";
    
    header('Location:index.php');
}

?>