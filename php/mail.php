<?php

$servername = "mysql.hostinger.mx";
$username = "u464622211_alext";
$password = "49_T3clas";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$sql = "INSERT INTO clients (name_client, phone, email, message, file, remembertoken)
VALUES ($_POST["name_client"], $_POST["phone"], $_POST["email"], $_POST["message"], $_POST["file"], $_POST["remembertoken"])";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn = null;