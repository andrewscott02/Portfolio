<?php
session_start();

include_once("includes/connection.php");

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
    $user_email .= " via Andrew Scott's Portfolio";
}
else
{
    $canSubmit = false;
}

$user_subject = "This message was sent from your portfolio: \n";

if (isset($_POST["user_subject"]))
{
    $user_subject .= filter_input(INPUT_POST, "user_subject", FILTER_SANITIZE_STRING);
}

$user_message = "";

if (isset($_POST["user_message"]))
{
    $user_message = filter_input(INPUT_POST, "user_message", FILTER_SANITIZE_STRING);
    // $user_message = $_POST["user_message"];
}
else
{
    $canSubmit = false;
}

#endregion

function SendEmail($user_name, $user_email, $user_subject, $user_message)
{
    //Send email here
    echo "sending email from $user_name with email $user_email";
    echo "\n";
    echo "Subject: $user_subject";
    echo "\n";
    echo "Message: $user_message";
}

SendEmail($user_name, $user_email, $user_subject, $user_message);

// header("Location: index.php");
// exit();