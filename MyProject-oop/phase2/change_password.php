<?php

require "connector.php";
session_start();


if (isset($_GET['token'])) {

    $email = trim($_GET['email']);
    $token = trim($_GET['token']);
}

if (isset($_POST['reset_password'])) {


    $password = htmlspecialchars(trim($_POST['password']));
    $cpassword = htmlspecialchars(trim($_POST['cpassword']));
    $hashed_password = sha1($password);

    $email = htmlspecialchars(trim($_POST['email']));
    $token = htmlspecialchars(trim($_POST['token']));


    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (empty($password)) {
        echo "<script>alert('Password field is required.')</script>";
    } elseif (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        echo "<script>alert('Password should at least 8 characters in length and must contain at leaset one number, one uppercase letter, one lowercase letter and one special character.')</script>";
    } elseif (empty($cpassword)) {
        echo "<script>alert('Comfirm password field is required.')</script>";
    } elseif ($cpassword != $password) {
        echo "<script>alert('Password doesn't match.')</script>";
    } else {
        $query = "UPDATE customer_data SET password ='$hashed_password' WHERE email= '$email'";
        $result = mysqli_query($connection, $query);
        if ($result) {

            header("location: sign-in.php?error=successfully created a new password.");
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="change_password.css">
</head>

<body>

    <!--
        the header section start here.
    -->
    <section class="header">
        <div class="logo">
            <img src="logo.jpg" class="logo">
        </div>
        <nav id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="">transactions</a></li>
                <li><a href="">pricing</a></li>
                <li><a href="">orders</a></li>
                <li><a href="">track order</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>

            <ul class="real">
                <li><a href="airtime.php">airtime</a></li>
                <li><a href="data.php">Data</a></li>
                <li><a href="cable_tv.php">cable tv</a></li>
                <li><a href="epins.php">ePins</a></li>
                <li><a href="electricity.php">electricity</a></li>
            </ul>

            <div class="account">
                <a href="sign-in.php"> <i class="fa fa-unlock-alt">login</i></a>
                <a href="sign-up.php"> <i class="fa fa-user-plus">register</i></a>
                <a href="logout.php" id="logout"><i class="fa fa-sign-out" aria-hidden="true">logout</i></a>
            </div>

            <div class="media">
                <a href="#"><i class="fa fa-whatsapp"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-telegram"></i></a>
            </div>
        </nav>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </section>
    <!--
        the header section ends here.
    -->


    <!--
        the form section start here.
    -->
    <section class="form">
        <div class="form_box">
            <h1>create a new password now!</h1>
            <form method="POST">
                <input type="password" placeholder="password" name="password">
                <input type="password" placeholder="confirm password" name="cpassword">
                <input type="submit" value="submit" name="reset_password" id="register">
                <input type="hidden" name="email" value="<?php if (isset($_GET['email'])) {
                                                                echo   $_GET['email'];
                                                            } ?>">
                <input type="hidden" name="token" value="<?php if (isset($_GET['token'])) {
                                                                echo  $_GET['token'];
                                                            } ?>">
            </form>
            <a href="sign-in.php" id="sign-up">login.</a>
            <p>don't have an account? <a href="sign-up.php">register.</a></p>
        </div>
    </section>
    <!--
        the form section ends here.
    -->


    <!--
        the footer section start here.
    -->
    <section class="footer">
        <div class="details">
            <div class="box_details">
                <h1>Contact info</h1>
                <h4>ADDRESS:</h4>
                <p>
                    8 Abdulganiyu Al-imam Ahmad street, aderoju, tanke, ilorin, kwara state.
                </p>
                <h4>PHONE/WhatsApp:</h4>
                <p>
                    07045461790
                </p>
                <h4>EMAIL:</h4>
                <p>
                    Ibghani@gmail.com
                </p>
                <h4>OFFICE DAYS/HOURS:</h4>
                <p>
                    Mon - Sat / 9:00 AM - 5:00 PM
                </p>
                <div class="media">
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-telegram"></i></a>
                </div>
            </div>
            <div class="box_details" id="detailsbox">
                <h1>About us</h1>
                <p>
                    VTU.ng is a virtual top-up platform owned and operated by FraNKAPPWeb Technologies (RC 2384195).
                    We are duly registered with the corporate affairs commission (CAC).
                    Our services include but not limited to Buying/Reselling of Cheap Data &
                    Airtime, Electricity Bills Payment, Cable TV Subscription and Airtime to Cash Conversion.
                    Enjoy our massive discounts for resellers and partners
                    and make money with us. <a href="#">Learn more</a>
                </p>
            </div>
            <div class="box_details" id="boxdetails">
                <h1>resources</h1>
                <a href="#">airtime</a>
                <a href="#">data</a>
                <a href="#">Cable TV</a>
                <a href="#">Electricity</a>
                <a href="#">Airtime to Cash</a>
                <a href="#">API Documentation</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Contact</a>
            </div>

            <a href="#"> <img src="VTU-Google-Playstore.png" alt=""></a>
        </div>
    </section>

    <!-- real footer here -->
    <div class="fuuter">
        <a href="#">Ibghani</a>
        <p>Copyright © 2023 IbGhani.ng. All Rights Reserved. Terms & Conditions | Privacy Policy</p>

    </div>
    <!--
the footer section ends here.
-->


    <!-- javascript start here -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.left = "0";
        }

        function hideMenu() {
            navLinks.style.left = "-300px";
        }
    </script>
    <!-- javascript ends here -->

</body>

</html>