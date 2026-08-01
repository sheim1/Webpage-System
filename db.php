<?php
$host = "sql104.infinityfree.com";
$dbname = "if0_42549682_student_db";
$username = "if0_42549682";
$password = "Shaimaa22Fayez";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>