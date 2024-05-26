<?php
include './admin_php/config.php';
include './admin_php/functions.php';

session_start();

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert data into database
$insertQuery = "INSERT INTO contact_form (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
if (mysqli_query($conn, $insertQuery)) {
    echo "Form submitted successfully.";
} else {
    echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
}
?>
