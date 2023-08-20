<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Control Panel</title>
    <link rel="stylesheet" href="cssadmin.css">
</head>
<body>
    <header>
        <h1>Admin Control Panel-Users</h1>
            <style>

                th, td {
                    border: 1px solid #ddd;
                    padding: 8px;
                    text-align: left;
                }
            </style>
    </header>
    
    <nav>
        <ul>
            <li><a href="admin.html">Dashboard</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="orders.php">Adoption Orders</a></li>
        </ul>
    </nav>
<main>
    <h2>User List</h2>

    <?php
    $db_server = "localhost";
    $db_username = "id21085883_root";
    $db_password = "Petshop@2023";
    $db_name = "id21085883_petshop";


$conn = new mysqli('localhost', 'id21085883_root', 'Petshop@2023', 'id21085883_petshop');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table border="1">';
        echo '<tr><th>User ID</th><th>Username</th><th>Email</th><th>Password</th></tr>';

        
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['password'] . '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    } else {
        echo "No users found";
    }

    $conn->close();
    ?>
</main>

<footer>
    <p>&copy;Pick Your Pet</p>
</footer>
</body>
</html>
