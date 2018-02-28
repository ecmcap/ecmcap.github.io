<?php
    // check if fields passed are empty
    if(empty($_POST['name'])        ||
    empty($_POST['phone'])      ||
    empty($_POST['email'])      ||
    empty($_POST['message'])    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
    echo "No arguments Provided!";
    return false;
   }

$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// create email body and send it
$to = 'not-reply@store.ecmcap.com'; // put your email
$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message. \n\n".
                  " Here are the details:\n \nName: $name \n ".
                  "Email: $email_address\n Phone: $phone\n Message \n $message";
$headers = "From: noreply@myaddress.com\n";


$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
