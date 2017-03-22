<?php

include 'connect.php';

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->prepare("INSERT INTO clients (name_client, phone, email, message, file, remembertoken) 
    VALUES (:name_client, :phone, :email, :message, :file, :remembertoken)");

    $sql->bindParam(':name_client', $_POST["name_client"]);
    $sql->bindParam(':phone', $_POST["phone"]);
    $sql->bindParam(':email', $_POST["email"]);
    $sql->bindParam(':message', $_POST["message"]);
    $sql->bindParam(':file', $_POST["file"]);
    $sql->bindParam(':remembertoken', $_POST["remembertoken"]);
    $sql->execute();
    
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
