<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CSRF token validation
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        header("Location: contact.php?status=error&msg=invalid_token");
        exit;
    }
    unset($_SESSION['csrf_token']);
    // Honeypot check
    if (!empty($_POST['hp_field'])) {
        // This is likely a bot, silently ignore
        header("Location: contact.php?status=success"); // Redirect to a success-like page to not alert bot
        exit;
    }

    // Sanitize and validate inputs
    $name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST["message"]), ENT_QUOTES, 'UTF-8');

    // Basic validation
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_email) || empty($subject) || empty($message)) {
        header("Location: contact.php?status=error&msg=invalid_input");
        exit;
    }

    // IMPORTANT: Please replace with your own email address
    $recipient = "contact@fileorganizer.odsantos.com";

    // Email headers
    $email_headers = "From: " . $name . " <" . $email . ">\r\n";
    $email_headers .= "Reply-To: " . $email . "\r\n";
    $email_headers .= "MIME-Version: 1.0\r\n";
    $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Build the email content
    $email_content = "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n\n";
    $email_content .= "Subject: " . $subject . "\n\n";
    $email_content .= "Message:\n" . $message . "\n";

    // Send the email
    if (mail($recipient, "[odsantos.com Contact] " . $subject, $email_content, $email_headers)) {
        header("Location: contact.php?status=success");
        exit;
    } else {
        header("Location: contact.php?status=error&msg=mail_failed");
        exit;
    }
} else {
    // Not a POST request, redirect to contact form
    header("Location: contact.php");
    exit;
}
