<?php
session_start();

include 'usr_db.php';
// print_r ($_SESSION['success']);
        
if (isset($_SESSION['success']) && $_SESSION['success'] == "You Are Now Logged In") {
    $now = time(); // Checking the time now when home page starts.
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<script>
        alert(\"Your Session Is Already Expired, Please Visit Again\");
        window.location= \"HomePage/index.php\";
        </script>";
    } elseif ($now <= $_SESSION['expire']) {
        session_destroy();
        echo "<script>
        alert(\"Thank You, Please Visit Again\");
        window.location= \"../home.html\";
        </script>";
    }
}elseif (!isset($_SESSION['success'])){
    echo "<script>
    alert(\"Please Login First\");
    window.location= \"user.php\";
    </script>";
}
