

<?php

require "connector.php";
 session_start();

 if(isset($_GET['message']) && !empty($_GET['message'])){

    echo "<script>alert('".$_GET['message']."')</script>";

 }

 if(!isset($_SESSION['id'])){
    header ("location: sign-in.php");
}


 $sqli = "SELECT * FROM customer_data WHERE id = ".$_SESSION['id']."";
 
 $query = mysqli_query($connection,$sqli);
 $result = mysqli_fetch_assoc($query);
 $_SESSION['amount'] = $result['wallet'];

 



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - I.B Ghani VTU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="modal.css">


   
    <!-- <link rel="stylesheet" href="ind,responsiveness.css"> -->
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
            <i class="fa fa-times" onclick="hideMenu()" id="show"></i>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="">transactions</a></li>
                <li><a href="pricing.php">pricing</a></li>
                <li><a href="">orders</a></li>
                <li><a href="">track order</a></li>
                <li><a href="">contact</a></li>
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
                   <a href="sign-up.html"> <i class="fa fa-user-plus">register</i></a>
                   <a href="logout.php" name="logout" id="logout"><i class="fa fa-sign-out" aria-hidden="true">logout</i></a>
                </div>

                <div class="media">
                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram" ></i></a>
                    <a href="#"><i class="fa fa-twitter" ></i></a>
                    <a href="#"><i class="fa fa-telegram" ></i></a>
                </div>
        </nav>
        
        <i class="fa fa-bars" onclick="showMenu()" id="show"></i>
    </section>
    <!--
        the header section ends here.
    -->

    <!-- the dashboard start here -->
    <section class="dashboard">
        <div class="table">

            <div class="contentss">
                <div class="prof_wallet">
                    <p> Hi,<span><?php echo $result ['username']; ?></span></p>
                    <a href="editprofile.php">edit profile | <a href="logout.php">log out</a></a>
                    <h5>(Customer)</5>
                </div>
                <div class="funding">
                    <h1><b> <strong><?= $result['wallet'] ?>.00</strong></b></h1>
                    <a href="#" id="openModalBtn"> <i class="fa fa-money"></i> fund wallet</a>
                </div>
            </div>

            <div class="items">

                <div class="item">
                    <a href="airtime.php"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>
                    <h2>Airtime</h2>
                </div>
                <div class="item">
                    <a href="data.php"><i class="fa fa-mobile"></i></a>
                    <h2>Data</h2>
                </div>
                <div class="item">
                    <a href="cable_tv.php"><i class="fa fa-television" aria-hidden="true"></i></a>
                    <h2>Cable tv</h2>
                </div>
                <div class="item">
                    <a href="epins.php"><i class="fa fa-floppy-o" aria-hidden="true"></i></a>
                    <h2>ePins</h2>
                </div>

                <div class="item">
                    <a href="electricity.php"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></a>
                    <h2>Electricity</h2>
                </div>
        
            </div>
            
        </div>

    </section>

    <!-- the dasboard ends here -->

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

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModalBtn">&times;</span>
        <form action="" id="paymentForm">
            <h2>payment form</h2>
            <input type="text" id="amount" placeholder="Amount" require>
            <input type="hidden" id="email" value="<?= $_SESSION['email'] ?>">
            <input type="hidden" id="userId" value="<?= $_SESSION['id'] ?>">
            <input type="submit" value="continue" onclick="payWithPaystack()" class="submit">

        </form>
    </div>
</div>


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
<script src="./js/payment.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>







    
</body>
</html>