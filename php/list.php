<?php

include 'connect.php';

try {
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->query('SELECT * FROM clients');
    foreach($sql as $row)
    {
    echo $row['email'] . "<br>";
    }

    echo "list created successfully";
    }
catch(PDOException $e) 
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
