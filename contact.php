<?php
// Set your email address here
$to = "raul.garcia.1627@gmail.com"; // <-- Replace this with your email

// Collect POST data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

// Validate fields (simple)
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    echo "Please fill in all fields.";
    exit;
}

// Email subject
$subject = "New Contact Form Message from $name";

// Email body
$body = "You received a new message from your website contact form:\n\n"
      . "Name: $name\n"
      . "Email: $email\n"
      . "Phone: $phone\n"
      . "Message:\n$message";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    echo "Thank you! Your message has been sent.";
} else {
    echo "Sorry, there was a problem sending your message.";
}
?>
