<?php
session_start(); // Start a session (if not already started)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = $_POST["lmobile"];
    $password = $_POST["lpass"];

    // Database connection details
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "Lottery";
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Sanitize user input (example: using mysqli_real_escape_string)
    $mobile = mysqli_real_escape_string($conn, $mobile);

    // Query to fetch the user's data by mobile number
    $query = "SELECT id, password FROM users WHERE mobileNo = '$mobile'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if (password_verify($password, $row["password"])) {
            // Password matches, login successful
            $_SESSION["user_id"] = $row["id"]; // Store user ID in the session
            header("Location: my1.php"); // Redirect to user's profile page
            exit;
        } else {
            // Incorrect password
            header("Location: my.html"); // Redirect with an error parameter
            exit;
        }
    } else {
        // User not found
        header("Location: my.html"); // Redirect with an error parameter
        exit;
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
