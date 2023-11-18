<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment3";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO contacts (id,name, address, dob, email, message) VALUES ('$id', '$name', '$address', '$dob', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
