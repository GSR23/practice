
<?php
session_start();
include 'test_opp.php';
// print_r ($_SESSION['success']);


if (isset($_SESSION['success']) && $_SESSION['success'] == "You Are Now Logged In") {
    $now = time(); // Checking the time now when home page starts.
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<script>
        alert(\"Session Expried! LogIn Again\");
        window.location= \"test.html\";
        </script>";
    } else {
        // echo    "<script>
        //         alert(\"You Are Now Logged In, Welcome!!!!\");
        //         </script>";

        // unset($_SESSION['success']);
        echo "<html>
                Hello, This Is India.
                </html>";
    }
} else {
    echo    "<script>
    alert(\"You Must Login Via test.html!\");
    </script>";
}
