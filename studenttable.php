<?php
$servername = "localhost";
$username = "uspfstudent";
$password = "1234567";
$dbname = "schooldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE studenttable (
Student_IdNumber INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Student_FamilyName VARCHAR(30) NOT NULL,
Student_Middlename VARCHAR(30) NOT NULL,
Student_EmailAddress VARCHAR(50) NOT NULL,
Student_HomeAddress VARCHAR(50) NOT NULL,
Student_MobileNumber INT(12) NOT NULL,
Student_Course VARCHAR(30) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>