<?php
session_start();

require 'vendor/autoload.php';
$config = require __DIR__ . '/../config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$errors = [];
$success = '';

if (empty($_SESSION['captcha']) || $_SERVER['REQUEST_METHOD'] === 'GET') {
    $a = rand(1, 10);
    $b = rand(1, 10);
    $_SESSION['captcha'] = $a + $b;
    $_SESSION['captcha_question'] = "$a + $b = ?";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $captcha = trim($_POST['captcha'] ?? '');

    // Validation
    if ($name === '') {
        $errors[] = 'Name is required';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required';
    }
    if ($subject === '') {
        $errors[] = 'Subject is required';
    }
    if ($message === '') {
        $errors[] = 'Message cannot be empty';
    }
    if ($captcha === '' || (int)$captcha !== $_SESSION['captcha']) {
        $errors[] = 'CAPTCHA answer was incorrect';
    }

    if (empty($errors)) {
        $mail = new PHPMailer(true);
        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = $config['mail_host'];
            $mail->SMTPAuth = true;
            $mail->Username = $config['mail_user'];
            $mail->Password = $config['mail_pass'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = $config['mail_port'];

            // Add UTF-8
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';

            // Recipients
            $mail->setFrom('hello@keshti.se', 'Keshti Gyllinger');
            $mail->addReplyTo($email, $name);
            $mail->addAddress('hello@keshti.se', 'Keshti Gyllinger');

            // Content
            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            $mail->send();

            $success = 'Message sent successfully! I will get back to you ASAP ✨.';
            // Clear captcha and form data
            $_SESSION['captcha'] = null;
            $_SESSION['captcha_question'] = null;
            $name = $email = $message = $subject = $captcha = '';
        } catch (Exception $e) {
            $errors[] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Contact</title>
</head>

<body>
    <?php if ($success): ?>
        <p class="contact-form__success"><?= htmlspecialchars($success) ?></p>
    <?php endif ?>

    <?php if (!$success): ?>
        <form method="post" action="" class="contact-form">
            <label class="contact-form__input-group">
                <p class="contact-form__label">Name</p>
                <input class="contact-form__input" type="text" name="name" value="<?= htmlspecialchars($name ?? '') ?>" required />
            </label>
            <label class="contact-form__input-group">
                <p class="contact-form__label">Email</p>
                <input class="contact-form__input" type="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>" required />
            </label>
            <label class="contact-form__input-group">
                <p class="contact-form__label">Subject</p>
                <input class="contact-form__input" type="text" name="subject" value="<?= htmlspecialchars($subject ?? '') ?>" required />
            </label>
            <label class="contact-form__input-group">
                <p class="contact-form__label">Message</p>
                <textarea class="contact-form__input" name="message" rows="8" required><?= htmlspecialchars($message ?? '') ?></textarea>
            </label>
            <label class="contact-form__input-group">
                <p class="contact-form__label">CAPTCHA <span class="contact-form__captcha"><?= $_SESSION['captcha_question'] ?></span></p>
                <input class="contact-form__input" type="text" name="captcha" required />
            </label>
            <button type="submit" class="contact-form__button btn"><?php include 'includes/icons/icon_send.php' ?>Send Message</button>
        </form>
    <?php endif ?>
    
    <?php if ($errors): ?>
        <ul class="contact-form__errors">
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

</body>

</html>
