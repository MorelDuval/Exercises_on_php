<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation of Email</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Validation of Email</h1>
    <p>
        <input type="email" placeholder="Enter your email" required name="email">
        <button type="submit">Submit</button>
    </p>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:green;'>$email is a valid email address.</p>";
        } else {
            echo "<p style='color:red;'>$email is not a valid email address.</p>";
        }
    }
?>