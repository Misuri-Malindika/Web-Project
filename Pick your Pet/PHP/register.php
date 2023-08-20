<?php

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];

    if ($password != $repassword) {
        echo "Passwords do not match!";
        exit; 
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$conn = new mysqli('localhost', 'id21085883_root', 'Petshop@2023', 'id21085883_petshop');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("insert into users (username, email, password) VALUES (?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sss", $username, $email, $hashedPassword);
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();


?>
