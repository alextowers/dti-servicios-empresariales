<?php

$servername = "mysql.hostinger.mx";
$username = "u464622211_alext";
$password = "49_T3clas";
$dbname = "	u464622211_dti";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO clients (name_client, phone, email, message, file, remembertoken)
    VALUES ('$_POST["name_client"], $_POST["phone"], $_POST["email"], $_POST["message"], $_POST["file"], $_POST["remembertoken"])";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


$conn = null;