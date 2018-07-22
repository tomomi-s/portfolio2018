<?php
header("Content-Type: text/html; charset=UTF-8");
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'class.phpmailer.php';
require 'class.smtp.php';
require 'mail-config.php';

// any messages that will be added along the way
$result   = 'success'; // the final result of the request (success|fail)
$messages = [];

//validation//
sleep(3);

$name   = trim($_POST['name']);
$email       = trim($_POST['email']);
$yourMessage = trim($_POST['your-message']);
$honeypot    = $_POST['honeypot'];
$humancheck  = $_POST['humancheck'];

if (empty($_POST)) {
    echo 'not a POST';
    exit();
}

function send_email($to_address, $template, $subject)
{
    global $config;

    $mail = new PHPMailer();

    $mail->isSMTP();
//    $mail->SMTPDebug =2; //check bug
    $mail->Host       = $config['mail']['server'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['mail']['emailaddress'];
    $mail->Password   = $config['mail']['password'];
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->CharSet = 'UTF-8';
    $mail->setFrom($config['mail']['from'], $config['mail']['fromname']); //should change to admin mail address for info
    $mail->addAddress($to_address);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    // $mail->addEmbeddedImage('../img/logo-brown.png', 'logo-brown');
    //add image in a mail

    ob_start();

    include $template;

    $html = ob_get_clean();

    $mail->Body = $html;

    if ($mail->send()) {
        return true; // all ok
    } else {
        return false; // error
    }

}

if ($honeypot == 'http://' && empty($humancheck)) {
    $errors = array();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "<p>Invalid email format.</p>";

    }

    if (empty($name)) {
        $errors[] = "<p>Please provide your name.</p>";

    }

    if (empty($yourMessage)) {
        $errors[] = "<p>Message is required.</p>";

    }

    if (!empty($errors)) {
        $messages[] = ['type' => 'error', 'text' => '<p>Please fill in forms correctly.&nbsp</p>'];
        foreach ($errors as $error) {
            $messages[] = ['type' => 'error', 'text' => $error];
        }
        $result = 'fail';
    } else {

        // send to admin(s)
        foreach ($config['sendto'] as $sendto_address) {
            if (!send_email($sendto_address, 'admin-email.php', '[Portfolio] Contact from a customer')) {
                $result = 'fail';
                break;
            }
        }

        if ($result == 'fail') // one of the sending above did not succeed
        {
            $messages[] = ['type' => 'error', 'text' => 'Message was not sent'];

        } else // all of them succeeded
        {
            $messages[] = ['type' => 'success', 'text' => '<p>Thank you for contacting us!</p>'];
        }
    }
} else {
    $messages[] = ['type' => 'error', 'text' => '<p>There was a problem with submission. Please try again.</p>'];

    $result = 'fail';
}

header('Content-Type: application/json');
header("Cache-Control: no-cache, must-revalidate");

echo json_encode([
    'result'   => $result,
    'messages' => $messages,
]);
exit();
//header('Location: ../index.html');
