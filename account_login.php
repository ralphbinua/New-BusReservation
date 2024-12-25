<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Both fields are required.";
        header("Location: login.php");
        exit();
    }

    // Prepare an SQL statement to prevent SQL injection for user table
    $stmt = $conn->prepare("SELECT password, role FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists in the user table
    if ($stmt->num_rows == 1) {
        // Bind the result
        $stmt->bind_result($hashedPassword, $role);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, start a session
            $_SESSION['username'] = $username;

            // Check the role
            if ($role === 'admin') {
                header("Location: dashboard.php"); // Redirect to admin dashboard
            } else {
                header("Location: user.php"); // Redirect to the main page
            }
            exit();
        } else {
            $_SESSION['error'] = "Invalid password.";
            header("Location: login.php");
            exit();
        }
    }

    // Check the employee table if not found in user table
    $stmt->close(); // Close the previous statement

    // Prepare an SQL statement for employee table
    $stmt = $conn->prepare("SELECT password, employeeType FROM employee WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists in the employee table
    if ($stmt->num_rows == 1) {
        // Bind the result
        $stmt->bind_result($hashedPassword, $role);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, start a session
            $_SESSION['username'] = $username;

            // Check the role
            if ($role === 'admin') {
                header("Location: dashboard.php"); // Redirect to admin dashboard
            } else {
                header("Location: user.php"); // Redirect to the main page
            }
            exit();
        } else {
            $_SESSION['error'] = "Invalid password.";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "No user found with that username.";
        header("Location: login.php");
        exit();
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>