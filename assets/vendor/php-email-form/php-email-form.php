<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Collect form data
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $subject = trim($_POST["subject"]);
  $message = trim($_POST["message"]);

  // Send email
    $to = "majoromatala@gmail.com";
    $subject = "New message from contact form: $subject";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
      // If the email was sent successfully, display a success message
      echo "Thank you for your message!";
    } else {
      // If there was an error sending the email, display an error message
      echo "There was a problem sending your message. Please try again later.";
    }
  }
}

?>