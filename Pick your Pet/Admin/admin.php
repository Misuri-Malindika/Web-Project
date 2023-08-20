<?php
$db_server = "localhost";
$db_username = "id21085883_root";
$db_password = "Petshop@2023";
$db_name = "id21085883_petshop";


$conn = new mysqli('localhost', 'id21085883_root', 'Petshop@2023', 'id21085883_petshop');

if ($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
}
?>
