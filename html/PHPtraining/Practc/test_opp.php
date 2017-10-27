<?php 
// session_start();
if (isset($_POST['Submit']) && $_POST['Submit'] == "Submit" ) {
    if ($_POST['UserName'] == 'AVRC26' && $_POST['Password'] == '123456') {
        session_start();
        $_SESSION['success'] = "You Are Now Logged In";
        $_SESSION['start'] = time(); // Taking now logged in time.
        // Ending a session in 30 minutes from the starting time.
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
        $_SESSION['success'] = "You Are Now Logged In";
        echo "<script>alert(\"You Are Logged In, You will be redirected to Dashboard\");
        window.location= \"test.php\";
        </script>";
    }
}