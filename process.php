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

        // Generating a unique code
        $code = md5(crypt(rand(), 'aa'));

        $objDB->query("INSERT INTO subscribers (email, reset_code) VALUES ('$email', '$code')");

        // Display Subscribe successfully message
        $_SESSION['msg'] = "Subscribe successfully 😎";
    }
    
    header('Location:index.php');
}

?>