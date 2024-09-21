<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Unset all session variables
$_SESSION = [];
session_destroy();

header("Location: home.php"); // Redirect to the home page
exit();
?>
