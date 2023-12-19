


<?php
if(isset($_GET['error'])){
    $error = $_GET['error'];
if(!empty($error)){
    echo "<script>alert('".$error."')</script>";
}

}

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sign-up.css">
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
                   <a href="phase2/sign-in.php"> <i class="fa fa-unlock-alt">login</i></a>
                   <a href="phase2/sign-up.php"> <i class="fa fa-user-plus">register</i></a>
                   <a href="phase2/logout.php" id="logout"><i class="fa fa-sign-out" aria-hidden="true">logout</i></a>
                </div>

                <div class="media">
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram" ></i></a>
                    <a href="#"><i class="fa fa-twitter" ></i></a>
                    <a href="#"><i class="fa fa-telegram" ></i></a>
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
            <h1>REGISTER NOW - IT'S EASY!</h1>
            <!-- <a href="Controller/user-auth/userAuth.php">hh</a> -->
            <form action="./Controller/user-auth/userAuth.php"  method="POST">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="N@gmail.com" name="email" >
                <input type="password" placeholder="Password" name="password">
                <input type="password" placeholder="Comfirm Password" name="cpassword">
                <input type="phone" placeholder="Phone number" name="phone_number">
                <p>By clicking the "Register" button below, it means you agree to our <a href="#">Terms & Conditions.</a></p>
                <input type="submit" value="register" name="signup" id="register">
            </form>
            <a href="sign-in.php" id="login">login.</a>
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