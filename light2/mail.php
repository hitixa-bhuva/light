<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to Composer autoload.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminEmail = "temp@gmail.com"; // Admin/recipient email
    $subject = "New Project Inquiry";

    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $propertyType = htmlspecialchars($_POST["propertyType"]);
    $userEmail = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $agree = isset($_POST["agree"]) ? "Yes" : "No";

    if (!$userEmail) {
        echo "invalid_email";
        exit;
    }

    $message = "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $userEmail\n";
    $message .= "Property Type: $propertyType\n";
    $message .= "Agreed to Privacy Policy: $agree\n";

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.yourdomain.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@yourdomain.com'; // SMTP username
        $mail->Password   = 'your_password';          // SMTP password
        $mail->SMTPSecure = 'tls';                    // or 'ssl'
        $mail->Port       = 587;                      // or 465 for ssl

        // Email to Admin
        $mail->setFrom('noreply@yourdomain.com', 'Website Contact');
        $mail->addAddress($adminEmail);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();

        // Send Confirmation to User
        $mail->clearAddresses(); // Clear admin address
        $mail->addAddress($userEmail);
        $mail->Subject = "We received your inquiry!";
        $mail->Body = "Dear $name,\n\nThank you for reaching out. We have received your inquiry and will get back to you shortly.\n\nBest regards,\nYour Company";

        $mail->send();

        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}
?>
