<?php
session_start(); // Start or resume the session

// Add cache control headers to prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Check if the user is logged in (you might have a user ID in the session)
if (isset($_SESSION["user_id"])) {
    // Clear the session data
    session_unset();
    session_destroy();

    // Redirect to the login or home page after logout
    header("Location: my.html"); // Replace with the appropriate page
    exit;
} else {
    // If the user is not logged in, you can redirect them to a login page
    header("Location: my.html"); // Replace with the appropriate page
    exit;
}
?>
