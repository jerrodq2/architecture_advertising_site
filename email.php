<?php

if(!isset($_POST['submit'])){
  //this page shouldn't be accessed directly, need to submit the form.
  echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['$email'];
$phone = $_POST['$phone'];
$message = $_POST['$message'];

if(empty($name) || empty($message))
{
  echo "Name and message are mandatory!";
  exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

//validate first
$email_from = 'tom@amazing-designs.com';

$email_subject = "Someone Is Trying To Contact You";

$email_body = "You've recieved a new message from: $name. \n Here is the message: \n $message \n Their contact info is \n email: $email, \n phone: $phone";

// code to send emails is as follows: email(to, subject, message, headers)
$to = 'jerrodq2@yahoo.com';
$subject = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//send the email
mail($to, $email_subject, $email_body, $headers);
//redirect to the thank you page (or the equivalent)
header('Location: client/index.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
