<?php

require_once 'config.php';

// Check if the subscribe button is clicked or set
if(isset($_POST['subscribe'])) {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // Check maybe the email already exist
    $result = $objDB->query("SELECT * FROM subscribers WHERE email ='$email'");

    // Stop duplicate of email
    if($result->num_rows) {

        // Display Email already exist message
        $_SESSION['msg'] = "Your Email already exist COMRADE 🚫";

    }else{

        $objDB->query("INSERT INTO subscribers (email) VALUES ('$email')");

        // Display Subscribe successfully message
        $_SESSION['msg'] = "Subscribe successfully 😎";
    }
    
    header('Location:index.php');
}

?>