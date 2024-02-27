<?php

$servername = "localhost";
$username = "root";
$passwrod = "";
$dbname = "db_cashier";

$conn = new mysqli($servername, $username, $passwrod, $dbname);

if($conn->connect_error) {
    die("connection failed: " . $conn->connection_error);
}

?>