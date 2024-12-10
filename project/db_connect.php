<?php

//turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors',1);

$servername = "localhost";

$username = "root";
$password = "";

$dbname = "dealkade";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}