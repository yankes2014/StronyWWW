<?php
session_start();
$servername = "localhost";
$username = "yankes";
$password = "cziter123";
$dbname = "yankes2014";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$id = $_GET['id'];
$name = $_GET['name'];
$surname = $_GET['surname'];

$sql = "INSERT INTO ludzie (imie, nazwisko)
VALUES ('$name', '$surname')";

if ($conn->query($sql) === TRUE) {
    echo "Record add successfully";
} else {
    echo "Error add record: " . $conn->error;
}

$conn->close();

header('Location: osoby.php');
?>