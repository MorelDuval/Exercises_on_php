<?php
$conn = new mysqli("localhost", "root", "", "school_db");
$result = $conn->query("SELECT * FROM students");

echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Registration Date</th>
        </tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['full_name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['registration_date'] . "</td>
          </tr>";
}

echo "</table>";
$conn->close();
?>