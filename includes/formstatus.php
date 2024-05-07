<?php

$submit_status = false;
$submit_message = false;

if (isset($_SESSION["submit_status"]))
{
    $submit_status = $_SESSION["submit_status"];
}

if (isset($_SESSION["submit_message"]))
{
    $submit_message = $_SESSION["submit_message"];
}

$_SESSION = [];