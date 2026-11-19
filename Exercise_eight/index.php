<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <form action="" method="POST">
        <p>
            <label for="name">Student name</label>
            <input type="text" name="name" required>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </p>
        <button type="submit" name="submit">Submit</button>
        <br><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $conn = new mysqli('localhost', 'root', '', 'school_db');

    $student_name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (full_name, email) VALUES ('$student_name', '$email')";
    if ($conn->query($sql)==TRUE) {
        echo "New student added successfully";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>