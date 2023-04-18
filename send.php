<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['contactName'];
  $email = $_POST['contactEmail'];
  $message = $_POST['contactMessage'];

  $to = 'nano9gs@hotmail.es';
  $subject = 'New message from your website';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully!';
  } else {
    echo 'An error occurred while sending the message.';
  }
}
