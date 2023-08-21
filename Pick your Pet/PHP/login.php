<?php
session_start();

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
                // Successful login, set session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $dbUsername;

                if ($dbUsername === 'Admin') {
                    header("Location: ../Admin/admin.html");
                    exit();
                } else {
                    header("Location: ../index.php"); // Redirect to index.php
                    exit();
                }
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
