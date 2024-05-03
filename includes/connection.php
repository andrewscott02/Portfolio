<?php

$env = parse_ini_file('.env');

$connection = $env["DB_CONNECTION"];
$host = $env["DB_HOST"];
$port = $env["DB_PORT"];
$database = $env["DB_DATABASE"];
$user = $env["DB_USER"];
$pass = $env["DB_PASS"];

try
{
    $dsn = $connection . ":host=" . $host . ';dbname=' . $database . ';port=' . $port;
    $db = new PDO($dsn, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    echo "Unable to connect to database";
    echo $e->getMessage(); //Calls the getMessage function on the exception object
    exit;
}