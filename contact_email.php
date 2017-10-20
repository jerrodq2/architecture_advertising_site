<?php

if(!isset($_POST['submit'])){
  //this page shouldn't be accessed directly, need to submit the form.
  echo "error; you need to submit the form!";
}

$visitor_name = $_POST['name'];
$visitor_message = $_POST['message'];
$visitor_email = $_POST['email'];


//incase the phone isn't provided
if(empty($_POST['phone'])){
  $visitor_phone = 'n/a';
} else {
  $visitor_phone = $_POST['phone'];
}


if(empty($visitor_name) || empty($visitor_message) || empty($visitor_email) )
{
  echo "Name, message, and email are mandatory!";
  exit;
}

//a function created below for security purposes
if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

// *********************************************************************************************
// *********************CODE FOR EMAIL BODY BELOW ***************************

$email_body = "
<html lang='en'>
  <head>
    <title> Email from Architecture Advertising Website - Building Form</title>
    <meta charset='utf-8'>
    <meta name='description' content='You have been contacted from your Architecture Advertising Website'>
  </head>


  <body>
    <header>
      <h2> You've recieved a new message from: $visitor_name, they're trying to contact you! </h2>
    </header>

    <main>
      <h4> Here is the message: </h4>
      <p> $visitor_message </p>
      <br>
      <h4> Their contact info is below: </h4>
      <ul>
        <li> email: $visitor_email </li>
        <li> phone: $visitor_phone </li>
      </ul>
    </main>

  </body>
</html>
";

// ********************************************************************************************
// **************************** END OF CODE FOR EMAIL BODY *******************************




// code to send emails is as follows: email(to, subject, message, headers)
$to = 'jerrodq2@yahoo.com';
$subject = "Contact Form Submission: $visitor_name Is Trying To Contact You \r\n";

$headers = "From: Architecture Advertising Website <noreply@example.com>\r\n";
$headers .= "Reply-To: $visitor_name <$visitor_email>\r\n";
$headers .= "Return-Path: $visitor_email\r\n";
$headers .= "Organization: Architecture Advertising Website\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";


//send the email
$mail = mail($to, $subject, $email_body, $headers);
if (!$mail){
  echo "Message not sent, there was an error. Please contact Jerrod at jerrodq2@yahoo.com";
  $errorMessage = error_get_last()['message'];
  echo "There was an error: $errorMessage";
  header('Location: error.html');
} else {
  echo "Message sent";
  header('Location: end.html');
}



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
