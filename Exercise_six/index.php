<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection failed: " .$conn->connect_error;
}

else {
    echo "Connection successful";
}

$conn->close();
?>