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
        <h1>Admin Control Panel-Orders</h1>
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
        <h2>Adoption Orders List</h2>

        <?php
            $db_server = "localhost";
            $db_username = "id21085883_root";
            $db_password = "Petshop@2023";
            $db_name = "id21085883_petshop";

            $conn = new mysqli('localhost', 'id21085883_root', 'Petshop@2023', 'id21085883_petshop');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM adoption"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table border='1'>";
                echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>City</th><th>PetCode</th><th>Experience</th><th>Mars as Done</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Fname"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "<td>" . $row["Phone"] . "</td>";
                    echo "<td>" . $row["Address"] . "</td>";
                    echo "<td>" . $row["City"] . "</td>";
                    echo "<td>" . $row["PetCode"] . "</td>";
                    echo "<td>" . $row["Experience"] . "</td>";
                    echo "<td><input type='checkbox' name='order_done' value='" . $row["id"] . "'></td>";
                    echo "</tr>";
                }

                echo "</table>";

            } else {
                echo "No adoption records found.";
            }

            $conn->close();
        ?>
    </main>

    <footer>
        <p>&copy;Pick Your Pet</p>
    </footer>
</body>
</html>
