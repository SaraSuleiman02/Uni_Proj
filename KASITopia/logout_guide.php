<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Unset all session variables
$_SESSION = [];
session_destroy();

header("Location: guide.php"); // Redirect to the guide page
exit();
?>
