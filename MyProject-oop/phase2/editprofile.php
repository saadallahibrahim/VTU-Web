<?php

require "connector.php";
session_start();

$user_id = htmlspecialchars(trim($_GET['user_id']));

$sql = "SELECT * FROM customer_data WHERE id='$user_id'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['edit'])){
    $fname = htmlspecialchars(trim($_POST['first_name']));
    $lname = htmlspecialchars(trim($_POST['last_name']));
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $cpassword = htmlspecialchars(trim($_POST['cpassword']));
    $phone = htmlspecialchars(trim($_POST['phone_number']));
    $hasshed_password = sha1($password);


    // $check_username = "SELECT * FROM customer_data WHERE username = '$username'";
    // $check_email = "SELECT * FROM customer_data WHERE email = '$email'";
    // $result = mysqli_query($connection,$check_username) OR die(mysqli_error($connection))


    // pattern for the email
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z]{2,3})$^";

    // pattern for the password
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(empty($fname)){
        echo "<script>alert('first name field is required')</script>";
        exit();
    }
    elseif(empty($lname)){
        echo "<script>alert('last name field is required')</script>";
        exit();
    }
    elseif(!preg_match("/^[a-zA-z]*$/",$username)){
        echo "<script>alert('Only alphabets and whitespace are allowed.')</script>";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('email field is required.')</script>";
        exit();
    }
    elseif(!preg_match ($pattern, $email)){
        echo "<script>alert('email not valid.')</script>";
    }
    elseif(empty($password)){
        echo "<script>alert('password field is requireds.')</script>";
    }
    elseif(strlen($password) <8 || !$number || !$uppercase || !$lowercase || !$specialChars){
        echo "<script>alert('Password should at least 8 characters in length and must contain at leaset one number, one uppercase letter, one lowercase letter and one special character.')</script>";
        exit();
    }
    elseif(empty($cpassword)){
        echo "<script>alert('Comfirm password field is required.')</script>";
    }
    elseif($cpassword != $password){
        echo "<script>alert('Password doesn't match.')</script>";
    }
    elseif(empty($phone)){
        echo "<script>alert('Phone number field is required.')</script>";
    }
    elseif(strlen ($phone) <11){
        echo "<script>alert('invalid phone number.')</script>";
    }
    elseif(strlen ($phone) >11){
        echo "<script>alert('invalid phone number(you inserted more than eleven <N>).')</script>";
    }
    elseif(!preg_match ('/^[0-9]*$/', $phone)){
        echo "<script>alert('Only numeric value is allowed.')</script>";    
    }
    else{
        $query = "UPDATE customer_data SET username = '$username', email = '$email', password = '$hasshed_password', phone_number = '$phone' WHERE id = $user_id";
        $result = mysqli_query($connection,$query);

        if($result){
            echo "<script>alert('successfully edited.')</script>";
            header("location: editprofile.php");
        }
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="editprofile.css">
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
                <div class="logo">
                    <img src="logo.jpg" class="logo">
                     </div>
                <li><a href="">airtime</a></li>
                <li><a href="">data</a></li>
                <li><a href="">capble tv</a></li>
                <li><a href="">electricity</a></li>
                <li><a href="">epins</a></li>
                <li><a href="">betting</a></li>
                <li><a href="">pricing</a></li>
                <li><a href="">blog</a></li>
                <li><a href="">contact</a></li>
                </ul>
                <div class="account">
                   <a href="#"> <i class="fa fa-unlock-alt">login</i></a>
                   <a href="#"> <i class="fa fa-user-plus">register</i></a>
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
            <h1>EDIT PROFILE!</h1>
            <form action=""  method="POST">
                <label for="first_name">First Name <span>*</span></label><br>
                <input type="text" placeholder="First Name" name="first_name">
                <label for="last_name">last Name <span>*</span></label><br>
                <input type="text" placeholder="Last Name" name="last_name">
                <label for="address">display Name <span>*</span></label><br>
                <input type="text" placeholder="username" name="username"
                >
                <p>this is how your name will be displayed in the account section and in reviews.</p>
                <label for="email">email address <span>*</span></label><br>
                <input type="email" placeholder="N@gmail.com" name="email"
               >
                <label for="password">change password <span>*</span></label><br>
                <input type="password" placeholder="Password" name="password">
                <input type="password" placeholder="Comfirm Password" name="cpassword">
                <label for="phone_number">Phone number <span>*</span></label><br>
                <input type="phone" placeholder="Phone number" name="phone_number">
                <input type="submit" value="Edit" name="edit" id="edit">
            </form>
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
                    <a href="#"><i class="fa fa-instagram" ></i></a>
                    <a href="#"><i class="fa fa-twitter" ></i></a>
                    <a href="#"><i class="fa fa-telegram" ></i></a>
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

                <a href="#"> <img src="image/VTU-Google-Playstore.png" alt=""></a>
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
    
    function showMenu(){
        navLinks.style.left = "0";
    }
    function hideMenu(){
        navLinks.style.left = "-300px";
    }
</script>
<!-- javascript ends here -->
    
</body>
</html>