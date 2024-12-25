<?php
session_start();
include 'passenger.php'; // Ensure this file connects to the database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID = $_POST['userID'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Consider hashing the password

    // Update employee data in the database
    $sql = "UPDATE user SET username = ?, email = ? WHERE userID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $email, $userID);
    $stmt->execute();

    // Redirect or show a success message
    header("Location: passenger-list.php");
    exit;
}
?>