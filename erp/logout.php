<?php
session_start();
session_unset();
session_destroy();
 
if (!isset($_SESSION['username'])) {
    header("Location: auth-login.php");
    exit(); // Terminate script execution after the redirect
}
?>