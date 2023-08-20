<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

$conn = new mysqli('localhost', 'id21085883_root', 'Petshop@2023', 'id21085883_petshop');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");

    if ($stmt) {
        $stmt->bind_param("s", $username);
        if ($stmt->execute()) {
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                $stmt->bind_result($dbUsername, $dbPassword);
                $stmt->fetch();

                if (password_verify($password, $dbPassword)) {
                    if ($dbUsername === 'Admin') {
                        header("Location: ../Admin/admin.html");
                        exit();
                } else {
                    header("Location: ../index.html"); 
                    exit();
                }
            } else {
                echo "Invalid username or password.";
            }
            } else {
                echo "Invalid username or password.";
            }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }}

    $conn->close();
?>
