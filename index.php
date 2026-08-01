<?php
include "db.php";

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

<h1>Student Management</h1>

<form action="insert.php"
<form action="insert.php" method="POST">
    <input type="text" name="name" placeholder="Enter Name" required>
    <input type="number" name="age" placeholder="Enter Age" required>
    <button type="submit">Submit</button>
</form>

<h2>Students List</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "
    <tr>
        <td>".$row['ID']."</td>
        <td>".$row['Name']."</td>
        <td>".$row['Age']."</td>
        <td>".$row['Status']."</td>
        <td>
            <a href='toggle.php?id=".$row['ID']."' onclick='return confirmToggle()'>Toggle</a>
        </td>
    </tr>
    ";
}
?>

</table>