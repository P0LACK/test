<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    if ($data !== null) {
        require_once '../db/db_connection.php';
        require_once '../api/send_request.php';

        $conn = connectDB();

        $uuid = $conn->real_escape_string($data['id']);
        $name = $conn->real_escape_string($data['name']);
        $itemType = $conn->real_escape_string($data['itemType']);
        $measureName = $conn->real_escape_string($data['measureName']);
        $quantity = intval($data['quantity']);
        $price = floatval($data['price']);
        $costPrice = floatval($data['costPrice']);
        $sumPrice = floatval($data['sumPrice']);
        $tax = floatval($data['tax']);
        $taxPercent = floatval($data['taxPercent']);
        $discount = floatval($data['discount']);

        $sql = "INSERT INTO requests (uuid, name, itemType, measureName, quantity, price, costPrice, sumPrice, tax, taxPercent, discount) 
                VALUES ('$uuid', '$name', '$itemType', '$measureName', $quantity, $price, $costPrice, $sumPrice, $tax, $taxPercent, $discount)";

        if ($conn->query($sql) === TRUE) {
            echo "Request processed successfully";
            sendRequest($uuid, $name, $price);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Invalid JSON data";
    }
} else {
    echo "Only POST requests are allowed";
}

