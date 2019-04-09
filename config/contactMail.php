<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require './../vendor/autoload.php';
    try {
        //Server settings
        $mail_to = 'admin@ziki.hng.tech';
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mail_from = $_POST['email'];
        $message = $_POST['message'];


        $mail = new PHPMailer(true);
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host = 'smtp.googlemail.com';                        // We can change this to any host
        $mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $mail->Username = 'admin@ziki.hng.tech';                     // To test, you can use your gmail
        $mail->Password = 'PASSWORD';                               // To test, you can use your gmail password
        $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->SMTPAutoTLS = false;

        //Recipients
        $mail->setFrom($mail_to, $name);
        $mail->addAddress($mail_from, $name);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }