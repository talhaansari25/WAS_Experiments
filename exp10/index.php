<?php
// PHP Web Application with Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Rno: " . $row["Rno"] . " - Name: " . $row["Name"] . " - College: " . $row["College"] . " - Branch: " . $row["Branch"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>