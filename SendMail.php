<?php

if(isset($_POST['send'])){
    
//getting details from the input and storing in a variable...

$fullnames = $_POST['fname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//checking if fields are empty..
if(empty($fullnames) || empty($email) || empty($subject) || empty($message)){
    header('location:index.php?error');
}

else{
    //my email..
    $to = "info@geniustech.me";

    if(mail($to, $subject, $message, $email)){
            header('location:index.php?success');
    }
}

}
else{
    header('location:index.php');
}

?>
