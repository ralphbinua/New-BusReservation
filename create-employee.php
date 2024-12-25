<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $role = trim($_POST['role']); // Get the selected role

    // Validate input
    if (empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($role)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO employee (email, username, password, employeeType) VALUES (?, ?, ?, ?)");

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssss", $email, $username, $hashedPassword, $role);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: employee-list.php");
            exit(); // Make sure to exit after a redirect
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>