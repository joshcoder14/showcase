<?php
header('Content-Type: application/json');

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Collect and sanitize form data
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? '';
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '';
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING) ?? 'New Contact Form Submission';
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING) ?? '';

// Validate inputs
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}
 
// Configuration - Use SMTP instead of API
require '../vendor/autoload.php'; // Require PHPMailer if not already included

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.sendgrid.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'apikey'; // Literally the word 'apikey'
    $mail->Password = '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'; // Your SendGrid API key
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('johnrusselzeraus@gmail.com', 'Portfolio Contact Form');
    $mail->addAddress('jorusszeraus@gmail.com', 'John Russel');
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Message:</strong></p>
        <p>" . nl2br(htmlspecialchars($message)) . "</p>
    ";
    $mail->AltBody = strip_tags($message);

    $mail->send();
    echo json_encode([
        'success' => true, 
        'message' => 'Your message has been sent successfully!'
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Failed to send message',
        'error' => $mail->ErrorInfo
    ]);
}
?>