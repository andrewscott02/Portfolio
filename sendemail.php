<?php
session_start();

include_once("includes/connection.php");

include_once("vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;

$env = parse_ini_file('.env');

$canSubmit = true;

#region Get Inputs

$user_name = "";

if (isset($_POST["user_name"]) && !empty($_POST["user_name"]))
{
    $user_name = filter_input(INPUT_POST, "user_name", FILTER_SANITIZE_STRING);
}
else
{
    $canSubmit = false;
}

$user_email = "";

if (isset($_POST["user_email"]) && !empty($_POST["user_email"]))
{
    $user_email = filter_input(INPUT_POST, "user_email", FILTER_SANITIZE_EMAIL);
    // $user_email .= " via Andrew Scott's Portfolio";
}
else
{
    $canSubmit = false;
}

$user_subject = "A message from my portfolio";

if (isset($_POST["user_subject"]) && !empty($_POST["user_subject"]))
{
    $user_subject = filter_input(INPUT_POST, "user_subject", FILTER_SANITIZE_STRING);
}

$user_message = "The following message was sent by: " . $user_email . "\n \n \n \n";
$html_message = "<h2>The following message was sent by: " . $user_email . "</h2> <br> <br>";

if (isset($_POST["user_message"]) && !empty($_POST["user_message"]))
{
    $filteredInput = filter_input(INPUT_POST, "user_message", FILTER_SANITIZE_STRING);
    $user_message .= $filteredInput;
    $html_message .= "<p>" . $filteredInput . "</p>";
}
else
{
    $canSubmit = false;
}

#endregion

function SendEmail($user_name, $user_email, $user_subject, $user_message, $html_message)
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
        $mail->isHTML(true);
        $mail->Subject = $user_subject;
        $mail->Body = $html_message;
        $mail->AltBody = $user_message;

        $mail->send();
        SetStatus("true", "Your message has been sent");
        return 'Message has been sent';
    }
    catch (Exception $e)
    {
        SetStatus("false", "There was an error with sending your message, please try again");
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function SetStatus($submit_status, $submit_message)
{
    $status = [
        "sbmt_status" => $submit_status,
        "sbmt_message" => $submit_message
    ];

    $_SESSION["submit_status"] = $submit_status;
    $_SESSION["submit_message"] = $submit_message;
}

SendEmail($user_name, $user_email, $user_subject, $user_message, $html_message);

header("Location: index.php");
exit();