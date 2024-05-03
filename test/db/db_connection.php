<?php
function connectDB() {
    $servername = "localhost";
    $username = "test";
    $password = "123";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
