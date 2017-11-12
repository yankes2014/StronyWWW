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
$sql = "DELETE FROM ludzie WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

header('Location: osoby.php');
?>