<?php
session_start();
include 'employee.php'; // Ensure this file connects to the database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employeeID = $_POST['employeeID'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Consider hashing the password
    $role = $_POST['role'];

    // Update employee data in the database
    $sql = "UPDATE employee SET username = ?, email = ?, employeeType = ? WHERE employeeID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $username, $email, $role, $employeeID);
    $stmt->execute();

    // Redirect or show a success message
    header("Location: employee-list.php");
    exit;
}
?>