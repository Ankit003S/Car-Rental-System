<?php

// Check if the 'username' session variable exists
if(!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>
