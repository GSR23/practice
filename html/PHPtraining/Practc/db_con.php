<?php

$host_name = 'localhost';
$user_name = 'root';
$password = 'password';
$db_name= 'practice';
$conn = mysqli_connect($host_name,$user_name,$password);

if (!$conn) {
    echo "Something went Wrong, Please Check";
} else {
    $db_conn=mysqli_select_db($conn,$db_name);
    if (!$db_conn) {
        echo "Database Not Found, Please Check DB";
    }
    else {
	echo "Database Found";
     }
}

?>
