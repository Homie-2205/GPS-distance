<?php
include 'db_connect.php';

// Get data from the form
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// SQL to insert data
$sql = "INSERT INTO customer_profiles (name, age, phone, email) 
        VALUES ('$name', '$age', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

