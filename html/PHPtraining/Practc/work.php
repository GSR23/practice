<?php


session_start(); 
include 'LoginForm/usr_db.php'; 
        
if (isset($_SESSION['success']) && $_SESSION['success'] == "You Are Now Logged In") { 
$now = time(); // Checking the time now when home page starts.
if ($now > $_SESSION['expire']) {
    session_destroy();
    echo "Yes";	
 } 
 else { 
    echo 'No';
 } 
}