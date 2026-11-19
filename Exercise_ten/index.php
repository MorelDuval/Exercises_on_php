<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
        <h1>Search Student</h1>
    <p>
        <input type="number" name="id" placeholder="Enter Student ID" required>
    </p>
    <button type="submit">Search</button>
</form>
</body>
</html>

<?php
if (isset($_GET['id'])) {
    $conn = new mysqli("localhost", "root", "", "school_db");
    $id = $_GET['id'];
    
    $result = $conn->query("SELECT * FROM students WHERE id = $id");

    if ($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row['id'] . "</p>";
        echo "<p>Name: " . $row['full_name'] . "</p>";
        echo "<p>Email: " . $row['email'] . "</p>";
    } else {
        echo "<p>Student not found.</p>";
    }
    
    $conn->close();
}
?>