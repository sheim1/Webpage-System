<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

$id = $_GET['id'];

$sql = "UPDATE students SET Status = 1 - Status WHERE ID = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>