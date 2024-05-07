<?php
session_start();

include_once("includes/connection.php");

include_once("vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;

$env = parse_ini_file('.env');

$canSubmit = true;

#region Get Inputs

$user_name = "";

if (isset($_POST["user_name"]))
{
    $user_name = filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_STRING);
}
else
{
    $canSubmit = false;
}

$user_email = "";

if (isset($_POST["user_email"]))
{
    $user_email = filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_STRING);
    // $user_email .= " via Andrew Scott's Portfolio";
}
else
{
    $canSubmit = false;
}

$user_subject = "";

if (isset($_POST["user_subject"]))
{
    $user_subject .= filter_input(INPUT_POST, "user_subject", FILTER_SANITIZE_STRING);
}

$user_message = "The following message was sent by: " . $user_email . "\n \n \n \n";

if (isset($_POST["user_message"]))
{
    $user_message .= filter_input(INPUT_POST, "user_message", FILTER_SANITIZE_STRING);
    // $user_message = $_POST["user_message"];
}
else
{
    $canSubmit = false;
}

#endregion

function SendEmail($user_name, $user_email, $user_message, $user_subject = "From my Portfolio")
{
    global $env;

    $mail = new PHPMailer(true);

    try
    {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = $env["MT_HOST"];
        $mail->SMTPAuth = true;
        $mail->Username = $env["MT_USERNAME"];
        $mail->Password = $env["MT_PASSWORD"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $env["MT_PORT"];

        //Recipients
        $mail->setFrom("test@demomailtrap.com", $user_name . " via My Portfolio");
        $mail->addAddress($env["RECIPIENT"], 'Andrew Scott');
        $mail->addReplyTo($user_email, $user_name);

        //Content
        $mail->isHTML(false);
        $mail->Subject = $user_subject;
        $mail->Body    = $user_message;

        $mail->send();
        echo 'Message has been sent';
    }
    catch (Exception $e)
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

SendEmail($user_name, $user_email, $user_message, $user_subject);

header("Location: index.php");
exit();