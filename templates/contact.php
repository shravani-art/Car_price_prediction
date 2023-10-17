<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["comments"];

    // Validate form data (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle validation error
        echo "Please fill in all the required fields.";
        exit;
    }

    // Set up email parameters
    $to = "shravanideolekar16@gmail.com"; // Replace with your own email address
    $subject = "Contact Form Submission";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";

    // Compose the email body
    $email_body = "Name: $name\n\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        // Email sent successfully
        echo "Thank you for contacting us. We'll get back to you shortly!";
    } else {
        // Error sending email
        echo "Sorry, an error occurred while sending your message. Please try again later.";
    }
} else {
    // Handle non-POST requests
    echo "Oops! It seems like you accessed this page incorrectly.";
}
?>
