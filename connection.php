<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "crud_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    // echo "Connected Succesfully";
}
