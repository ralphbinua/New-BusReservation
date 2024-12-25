<?php
include 'employee.php'; // Ensure this file connects to the database

if (isset($_GET['id'])) {
    $employeeID = intval($_GET['id']); // Get the user ID from the URL and convert it to an integer

    // Prepare the SQL DELETE statement
    $sql = "DELETE FROM employee WHERE employeeID = ?";

    // Create a prepared statement
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind the user ID parameter
        mysqli_stmt_bind_param($stmt, "i", $employeeID);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect back to the passenger list with a success message
            header("Location: employee-list.php?message=Employee deleted successfully.");
            exit();
        } else {
            // Handle error
            echo "Error deleting record: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>