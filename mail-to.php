<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $inquirytype = $_POST['inquiry-type'];


$email_from = 'alyszjvj@alysiadennis.website';

$email_subject = "New Form submission";

$email_body = "You have received a new message from the user $name. They are a $inquirytype\n".
                            "Here is the message:\n $message".
        
        
$to = "alysia.dennis@pcc.edu    ";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);


if(mail($to,$email_subject,$email_body,$headers))
      {
      echo "<script>alert('Mail was sent !');</script>";
      echo "<script>document.location.href='contact.php'</script>";
      }
      else
      {
      echo "<script>alert('Mail was not sent. Please try again later');</script>";
      }



?>
