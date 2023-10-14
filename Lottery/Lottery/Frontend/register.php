<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Establish a database connection (update the database credentials)
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "Lottery";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobileNo = $_POST["mnumber"];
    $lotteryNo = $_POST["lottery"];
    $registrationDate = $_POST["rdate"];
    $password = $_POST["rpassword"];

    // Check for empty fields
    if (empty($name) || empty($mobileNo) || empty($lotteryNo) || empty($registrationDate) || empty($password)) {
        echo "Please fill in all the required fields.";
    } else {
        // Sanitize and validate input (example: using mysqli_real_escape_string)
        $name = mysqli_real_escape_string($conn, $name);
        $mobileNo = mysqli_real_escape_string($conn, $mobileNo);
        $lotteryNo = mysqli_real_escape_string($conn, $lotteryNo);
        $registrationDate = mysqli_real_escape_string($conn, $registrationDate);

        // Check if the mobile number is already registered
        $checkQuery = "SELECT id FROM users WHERE mobileNo = '$mobileNo'";
        $checkResult = mysqli_query($conn, $checkQuery);
        if (mysqli_num_rows($checkResult) > 0) {
            echo "Mobile number is already registered. Please use a different mobile number.";
           // $errorMessage = "Mobile number is already registered. Please use a different mobile number.";
        } else {
            // Hash the password
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            // Insert the registration data into the database (update the table and column names)
            $sql = "INSERT INTO users (name, mobileNo, lotteryNo, registrationDate, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssss", $name, $mobileNo, $lotteryNo, $registrationDate, $passwordHash);

            if (mysqli_stmt_execute($stmt)) {
                // Registration successful, redirect to login page
                header("Location: my.html");
                exit; // Terminate the script to ensure the redirection happens
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    // Close the database connection
    mysqli_close($conn);
}
?>
