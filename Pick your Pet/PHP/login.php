<?php
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $petCode = $_POST["Pet_Code"];
    $experience = $_POST["experience"];
    $pickup = isset($_POST["pickup"]) ? "Yes" : "No";
    $agreement = isset($_POST["agreement"]) ? "Yes" : "No";

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petshop";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con) {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO adoption_applications (name, email, phone, address, city, pet_code, experience, pickup_from_shop, agreement)
    VALUES ('$name', '$email', '$phone', '$address', '$city', '$petCode', '$experience', '$pickup', '$agreement')";

    $rs = mysqli_query($con, $sql);
    if ($rs) {
        echo "Done!";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
