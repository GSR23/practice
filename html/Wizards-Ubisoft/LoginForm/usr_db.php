<?php
// include 'user.php';
$host_name = 'localhost';
$user_name = 'root';
$password = 'passwrd';
$db_name= 'practice';
// if (isset($_POST['btn_signin']) || isset($_POST['btn_signup'])) {
if (isset($_POST['btn_signin']) && $_POST['btn_signin']== "Sign In") {
    $n_i = $_POST['usr_i_username'];
    $p_i = $_POST['usr_i_password'];
    if (!empty($n_i)) {
        if (!empty($p_i)) {
            $p_i = md5($p_i);
            $conn = mysqli_connect($host_name, $user_name, $password);
            if (!$conn) {
                echo "<script>
                    alert(\"Something with DB went Wrong, Please Check\");
                    window.location= \"user.php\";
                    </script>";
            } else {
                $db_conn=mysqli_select_db($conn, $db_name);
                if (!$db_conn) {
                    echo "<script>
                        alert(\"Database Not Found, Please Check DB\");
                        window.location= \"user.php\";
                        </script>";
                } else {
                    $sql_i = "SELECT * FROM user_data WHERE user_db_username = '$n_i' AND user_db_password = '$p_i'";
                    $qry_i = mysqli_query($conn, $sql_i);
                    if (mysqli_affected_rows($conn) == 1) {
                        session_start();
                        $_SESSION['success'] = "You Are Now Logged In";
                        $_SESSION['start'] = time(); // Taking now logged in time.
                        // Ending a session in 30 minutes from the starting time.
                        $_SESSION['expire'] = $_SESSION['start'] + (5* 60);
                        unset($_POST['btn_signin']);
                        echo "<script>
                            alert(\"Success!! Welcome to Wizards Ubisoft.\");
                            alert(\"For Your Security, You Need to Re-Login for every 5Minutes.\");
                            window.location= \"HomePage/index.php\";
                            </script>";
                        // header('Location: HomePage\index.php');
                    } else {
                        echo "<script>
                            alert(\"OOps!! SomeThing Went Wrong, Please Try Again\");
                            window.location= \"user.php\"
                            </script>";
                    }
                }
            }
        } else {
            echo "<script>
                alert(\"OOps!! Password Should Not be empty\");
                window.location= \"user.php\"
                </script>";
        }
    } else {
        echo "<script>
            alert(\"OOps!! User Name Should Not Be empty\");
            window.location= \"user.php\"
            </script>";
    }
} elseif (isset($_POST['btn_signup']) && $_POST['btn_signup']== "Sign Up") {
    $n = $_POST['usr_u_name'];
    $u = $_POST['usr_u_username'];
    $e = $_POST['usr_u_email'];
    $p_1 = $_POST['usr_u_1_password'];
    $p_2 = $_POST['usr_u_2_password'];
    //You Can Validate the Inputs Here again. But I skipped It
    $conn = mysqli_connect($host_name, $user_name, $password);
    if (!$conn) {
        echo "<script>
            alert(\"Something in DB went Wrong, Please Check\");
            window.location= \"user.php\";
            </script>";
    } else {
        $db_conn=mysqli_select_db($conn, $db_name);
        if (!$db_conn) {
            echo "<script>
                alert(\"Database Not Found, Please Check DB\");
                window.location= \"user.php\";
                </script>";
        } else {
            // Checking if name is set
            if (!empty($n)) {
                //Checking if user name is set and already exists inside database
                if (!empty($u)) {
                    $sql_u= "SELECT * FROM user_data WHERE user_db_username = '$u'";
                    $qry_u = mysqli_query($conn, $sql_u);
                    $row_u = mysqli_fetch_row($qry_u);
                    if (empty($row_u)) {
                        //Checking if Email is set and already exists inside database
                        if (!empty($e)) {
                            $sql_e= "SELECT * FROM user_data WHERE user_db_email = '$e'";
                            $qry_e = mysqli_query($conn, $sql_e);
                            $row_e = mysqli_fetch_row($qry_e);
                            if (empty($row_e)) {
                                //Checking if Passwords are set and Matched
                                if (!empty($p_1) && !empty($p_1)) {
                                    if ($p_1 == $p_1) {
                                        $p = md5($p_1);
                                        $sql= "INSERT INTO user_data (user_db_name ,user_db_username, user_db_password, user_db_email) VALUES ('$n', '$u', '$p', '$e') ";
                                        if ($sql_suc=mysqli_query($conn, $sql)) {
                                            echo "<script>
                                            alert(\"Sucess!! Sucessfully SignedUp. Your Details are Sent To You EMail\");
                                            window.location= \"user.php\"
                                            </script>";
                                            SendEmail();
                                            unset($_POST['btn_signup']);
                                            // header('Location: user.php');
                                        } else {
                                            echo "<script>
                                            alert(\"Ooops.. Something went Wrong, Please Try Again\");
                                            window.location= \"user.php\"
                                            </script>";
                                        }
                                    } else {
                                        echo "<script>
                                    alert(\"OOps!! Passwords Do Not Match\");
                                    window.location= \"user.php\"
                                    </script>";
                                    }
                                } else {
                                    echo "<script>
                                alert(\"OOps!! Password Cannot be Empty\");
                                window.location= \"user.php\"
                                </script>";
                                }
                            } else {
                                echo "<script>
                            alert(\"OOps!! Email already exists\");
                            window.location= \"user.php\"
                            </script>";
                            }
                        } else {
                            echo "<script>
                        alert(\"OOps!! Email Should not be empty\");
                        window.location= \"user.php\"
                        </script>";
                        }
                    } else {
                        echo "<script>
                    alert(\"OOps!! UserName already exists\");
                    window.location= \"user.php\"
                    </script>";
                    }
                } else {
                    echo "<script>
                alert(\"OOps!! User Name should not be empty\");
                window.location= \"user.php\"
                </script>";
                }
            } else {
                echo "<script>
            alert(\"OOps!! Name Should Not Be empty\");
            window.location= \"user.php\"
            </script>";
            }
        }
    }
}
// } else {
//     echo "<script>
//     alert(\"Ouch! No User Action Specified.\");
//     window.location= \"user.php\"
//     </script>";
// }

function SendEmail()
{
    require 'PHPMailer/PHPMailerAutoload.php';
    $Name = $_POST['usr_u_name'];
    $email = $_POST['usr_u_email'];
    $UserName = $_POST['usr_u_username'];
    $Password = $_POST['usr_u_1_password'];
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "vra.php@gmail.com";
    $mail->Password = "Rule4@all";
    $mail->setFrom('noreply@wizard.com', 'Wizard\'s Ubisoft');
    $mail->addReplyTo('vra.php@gmail.com', 'VenkataRakesh');
    $mail->addAddress($email, $Name);
    $mail->Subject = 'Wizard\'s Ubisoft Credentials';
    $mail->Body = "Hello $Name

                        Your Credentials:

                        UserName: $UserName
                        Password: $Password

                        You can Visit your page at: 34.214.92.199";
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "<script>
        alert(\"Sucess!! Your Details are sent to your E-Mail. Now Please Login\");
        window.location= \"user.php\"
        </script>";
        ;
    }
}
