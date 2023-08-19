<?php

$FName =$_POST['FName'];
  $Email =$_POST['Email'];
  $Phone =$_POST['Phone'];
  $Address =$_POST['Address'];
  $City =$_POST['City'];
  $PetCode =$_POST['PetCode'];
  $Experience =$_POST['Experience'];


$conn = new mysqli('localhost', 'id21085883_root', 'Petshop@2023', 'id21085883_petshop');

if ($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
} else{
    //$stmt = $conn->prepare("insert into register(Fname, Email, Phone, Address, City, Petcode, Experience)
    //values(?, ?.?, ?, ?, ?, ?)");
    $stmt = $conn->prepare("insert into adoption(FName, Email, Phone, Address, City, PetCode, Experience)
    VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $FName, $Email, $Phone, $Address, $City, $PetCode, $Experience);
    $stmt->execute();
    echo "Application Submitted Successfully!";
    $stmt->close();
    $conn->close();
}

?>   
