<?php
session_start(); // Start a session (if not already started)

// Check if the user is logged in
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    // Database connection details
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "Lottery";
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch user's information from the database (adjust table and column names accordingly)
    $query = "SELECT name, mobileNo, lotteryNo, registrationDate FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $mobileNo = $row["mobileNo"];
        $lotteryNo = $row["lotteryNo"];
        $registrationDate = $row["registrationDate"];
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: my.html");
    exit;
}
?>
