<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";
$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO students (Name, Age, Status) VALUES ('$name', '$age', 0)";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>