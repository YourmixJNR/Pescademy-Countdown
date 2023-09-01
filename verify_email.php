<?php 

require_once 'config.php';

// Verify with the unique code
if(isset($_GET['code'])) {

    // Get the unique code
    $code = $_GET['code'];

    $result = $objDB->query("SELECT * FROM subscribers WHERE reset_code='$code'");

    if($result->num_rows==1) {
        
        $data = $result->fetch_object();

        if($data->reset_code==$code) {

            //Update the record of subscriber from is_active 0 to 1 and reset_code to empty
            $objDB->query("UPDATE subscribers SET is_active=1, reset_code='' WHERE reset_code='$code'");

            //Send email
            $message = "Hi! You can download your package from <a href='http://localhost/pescademy-countdown/assets/PescaWelcome.png'>here</a>.";

            send_mail([
                'to' => $data->email,
                'from' => 'Pescademy Scholarship',
                'message' => $message,
                'subject' => 'Download Package'
            ]);

            //Send message back to home page
            $_SESSION['msg'] = 'Congratulations! package has been sent to your email address. Please, check your email and download your free package.';

        }else {
            $_SESSION['msg'] = "Record not found";
        }

    }

    header('Location:index.php');

}

?>