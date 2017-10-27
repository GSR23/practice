<!-- // print_r ($_SESSION['success']); -->


<?php
session_start();
include 'usr_db.php';
// print_r ($_SESSION['success']);
        
if (isset($_SESSION['success']) && $_SESSION['success'] == "You Are Now Logged In") {
    $now = time(); // Checking the time now when home page starts.
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<script>
        window.location= \"../user.php\";
        </script>";
    } else {
        echo "<script>
        window.location= \"HomePage/index.php\";
        </script>";
    }
}
?>
            <!DOCTYPE html>
            <html>

            <head>
                <meta charset="UTF-8">
                <title>Login To Wizard</title>
                <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

                <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

                <link rel="stylesheet" href="style.css">


            </head>

            <body>
                <div class="login-wrap">
                    <div class="login-html">
                        <center>
                        <a href="../home.html"><img src="logo.png" align="middle" title="Go Back to HomePage"></a>
                        </center>
                        <br>
                        <br>


                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                        <label for="tab-1" class="tab">
                            <span style="color:rgb(139, 135, 135);">Sign In</span>
                        </label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up">
                        <label for="tab-2" class="tab">
                            <span style="color:rgb(139, 135, 135);">Sign Up</span>
                        </label>
                        <div class="login-form">
                            <div class="sign-in-htm">
                                <form name="signin" method="POST" action="usr_db.php">
                                    <!-- action="usr_db.php" -->
                                    <div class="group">
                                        <span style="color:rgb(255, 255, 255);">Username</span>
                                        <br>
                                        <br>
                                        <input type="text" class="input" id="usr_i_username" name="usr_i_username">
                                    </div>
                                    <div class="group">
                                        <span style="color:rgb(255, 255, 255);">Password</span>
                                        <br>
                                        <br>
                                        <input type="password" class="input" id="usr_i_password" name="usr_i_password">
                                    </div>
                                    <div class="group">
                                        <input id="check" type="checkbox" class="check" unchecked>
                                        <label for="check" style="color:rgb(255, 255, 255);">
                                            <span class="icon"></span> &nbsp Keep me Signed in </label>
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" name="btn_signin" value="Sign In" onclick="return ValidateSignIn()">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <a href="#forgot">Forgot Password?</a><br><br>
                                        <a href="../home.html"><span style="color:rgb(255, 255, 255);">Go Back To Home Page</span></a>
                                    </div>
                                </form>
                            </div>
                            <div class="sign-up-htm">
                                <form name="signup" method="POST" action="usr_db.php">
                                    <!-- action="usr_db.php" -->
                                    <div class="group">
                                        <span style="color:rgb(255, 255, 255);">Name</span>
                                        <br>
                                        <br>
                                        <input type="text" class="input" id="usr_u_name" name="usr_u_name">
                                    </div>
                                    <div class="group">
                                        <span style="color:rgb(255, 255, 255);">Username</span>
                                        <br>
                                        <br>
                                        <input type="text" class="input" id="usr_u_username" name="usr_u_username">
                                    </div>
                                    <div class="group">
                                        <span style="color:rgb(255, 255, 255);">Email Address</span>
                                        <br>
                                        <br>
                                        <input type="text" class="input" id="usr_u_email" name="usr_u_email">
                                    </div>
                                    <div class="group">
                                        <span style="color:rgb(255, 255, 255);">Password</span>
                                        <br>
                                        <br>
                                        <input type="password" class="input" id="usr_u_1_password" name="usr_u_1_password">
                                    </div>
                                    <div class="group">
                                        <span style="color:rgb(255, 255, 255);">Repeat Password</span>
                                        <br>
                                        <br>
                                        <input type="password" class="input" id="usr_u_2_password" name="usr_u_2_password">
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" name="btn_signup" value="Sign Up" onclick="return ValidateSignUp()">

                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <label for="tab-1">Already Member?</a><br><br>
                                        <a href="../home.html"><span style="color:rgb(255, 255, 255);">Go Back To Home Page</span><a>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </body>

            </html>

            <script type="text/javascript">
                function ValidateSignIn() {
                    if (document.signin.usr_i_username.value == '') {
                        alert('Username Should No Be Empty1');
                        window.location.href = "user.php";
                        return false;
                    } else {
                        // var u_i = document.signin.usr_i_username.value;
                        // var pattern_u = /^[a-zA-Z0-9]([._](?![._])|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$/;
                        // var res_u = pattern_u.test(u_i);
                        if (/^[a-zA-Z0-9]([._](?![._])|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$/.test(document.signin.usr_i_username.value) == false) {
                            alert('SomeThing Went Wrong Please Re-Enter UserId and Password');
                            window.location.href = "user.php";
                            return false;
                        } else if (/^[a-zA-Z0-9]([._](?![._])|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$/.test(document.signin.usr_i_username.value) == true) {
                            if (document.signin.usr_i_password.value == '') {
                                alert('Password Should Not Be Empty');
                                window.location.href = "user.php";
                                return false;
                            } else {
                                // var p_i = document.signin.usr_i_password.value;
                                // var pattern_p = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/
                                if (/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(document.signin.usr_i_password.value) == false) {
                                    alert('SomeThing Went Wrong Please Re-Enter UserId and Password');
                                    window.location.href = "user.php";
                                    return false;
                                }
                            }
                        }
                    }
                }

                function ValidateSignUp() {
                    // Checking If User Entered any Values.
                    if (document.signup.usr_u_name.value == '') {
                        alert('Name Should Not Be Empty');
                        window.location.href = "user.php";
                        return false;
                    } else if (document.signup.usr_u_username.value == '') {
                        alert('UserName Should Not Be empty');
                        window.location.href = "user.php";
                        return false;
                    } else if (document.signup.usr_u_email.value == '') {
                        alert('Email Should Not Be Empty');
                        window.location.href = "user.php";
                        return false;
                    } else if (document.signup.usr_u_1_password.value == '') {
                        alert('Password Should Not Be Empty');
                        window.location.href = "user.php";
                        return false;
                    } else if (document.signup.usr_u_2_password.value == '') {
                        alert('Passwords Should Not Be Empty');
                        window.location.href = "user.php";
                        return false;
                    } else if (document.signup.usr_u_1_password.value !== document.signup.usr_u_2_password.value) {
                        alert('Passwords DoNot Match, ReEnter Password');
                        window.location.href = "user.php";
                        return false;
                    } else {
                        if (document.signup.usr_u_1_password.value == document.signup.usr_u_2_password.value) { //If all Values are entered and Passwords are Matching

                            if (/^[A-Za-z\s]{2,25}$/.test(document.signup.usr_u_name.value) == false) {    //Validate Name
                                alert('Name Should Have only Alphabets and 25 Characters in length');
                                window.location.href = "user.php";
                                return false;
                            } else if (/^[a-zA-Z0-9]([._](?![._])|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$/.test(document.signup.usr_u_username.value) == false) {        //Validate User Name
                                alert('Username Should be AlphaNumeric with atleast 6letters and Max of 18 with only Alphabets(Upper and/or Lower) AND Numbers and/or \'.\' and/or \'_\' ');
                                window.location.href = "user.php";
                                return false;
                            } else if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(document.signup.usr_u_email.value) == false) {        //Validate Email
                                alert('Enter a Valid Email ID');
                                window.location.href = "user.php";
                                return false;
                            } else if (/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(document.signup.usr_u_1_password.value) == false) {        //Validate Password
                                alert('Password be atleast 8 Chars in Length should contain atleast One Upper case, One lower case, One Number, One Special Character');
                                window.location.href = "user.php";
                                return false;
                            }
                        }
                    }
                }
            </script>