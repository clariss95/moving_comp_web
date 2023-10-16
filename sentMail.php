<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_POST['submit'])) {
$mailto = "josh_english111@hotmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$preferPhoneCall = isset($_POST["preferPhoneCall"]) ? "Yes" : "No";


// email body EE receives 
  $subject = "New Contact Form Submission";
  $headers = "From:" . $email ;
  $headers2 = "From:" . $mailto;

  $contactFormMessage = "Client name: " . $name . "\n"
  . "Phone number: " . $phone . "\n"
  . "Email: " . $email . "\n\n"
  . "Client message: " . $message . "\n"
  . "Prefers phone call: " . $preferPhoneCall . "\n";

// email body the client receives
$messageToClient = "Dear " . $name . "\n"
    . "Thank you for contacting us! We will get back to you shortly!" . "\n\n"
    . "You submitted the following message: " . $message . "\n\n"
    . "Have a great day!" . "\n"
    . "Josh and Nicole" . "\n"
    . "English's Enterprise" . "\n";

// php mailer function 
$result1 = mail($mailto, $subject, $contactFormMessage, $headers);
$result2 = mail($email, $subject,  $messageToClient, $headers);

// check if email was sent successfully 

if ($result1 && $result2) {
    $success = "Your message was sent successfully!";
} else {
        $failed = "Sorry! Your message was not sent. Please try again later!";
}

}
?>