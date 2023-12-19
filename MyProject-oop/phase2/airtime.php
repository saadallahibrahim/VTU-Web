<?php
if(isset($_GET['message']) && !empty($_GET['message'])){

    echo "<script>alert('".$_GET['message']."')</script>";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airtime</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="card.css">
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
                <li><a href="#">transactions</a></li>
                <li><a href="#">pricing</a></li>
                <li><a href="#">orders</a></li>
                <li><a href="#">track order</a></li>
                <li><a href="#">contact</a></li>
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

 
    
    <!-- the airtime field start here. -->
    <section class="airtimes">
        <div class="content">
            <h1>Buy VTU Airtime Online in Nigeria &amp; Get Instant Discounts</h1>
            <div class="airtime_form">
            <form action="./Controller/Transaction/transaction.php" method="Post">
                <label for="network">Network <span> *</span></label><br>
                <select name="network" id="network">
                    <option value="network">Choose Network</option>
                    <option value="Mtn">Mtn</option>
                    <option value="Glo">Glo</option>
                    <option value="Airtel">Airtel</option>
                    <option value="9mbile">9mobile</option>
                </select><br>
                <label for="phone"> phone <span> *</span></label><br>
                <input type="phone" placeholder="Enter phone number" name="phone"><br>
                <label for="amount">Amount <span> *</span></label><br>
                <input type="phone number" placeholder="Enter Amount" name="amount"><br>
                <input type="submit" value="continue" name="buy-airtime" class="submit">
            </form>
            </div>
            <p>Buy/Resell IBGHANI Airtime Online at Discount Prices for all Mobile Networks (MTN, Glo, Airtel & 9mobile) in Nigeria. Instant Delivery!</p>
        </div>
    </section>

    <!-- the airtime field ends here. -->

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
                <a href="airtime.php">airtime</a>
                <a href="data.php">data</a>
                <a href="cable_tv.php">Cable TV</a>
                <a href="electricity.php">Electricity</a>
                <a href="pricing.php">Pricing</a>
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




  function validateForm() {
    const form = document.querySelector("form");
    const networkSelect = form.elements["network"];
    const phoneInput = form.elements["phone"];
    const amountInput = form.elements["amount"];


    function isValidPhoneNumber(number) {
        // this only validate the existing prefixs not that validate prefix on each networs
      const validPrefixes = ["0805", "0807", "0705", "0815", "0811", "0905",  "0915",  "0802",
        "0808",  "0708",  "0812",  "0701",  "0902",  "0901",  "0904",  "0907",  "09012", 
      "0803",  "0806",  "0703",  "0706",  "0813",  "0816",  "0810",  "0814",  "0903",  "0906", 
       "0913",  "0916",  "07025",  "07026",  "0704", "0809",  "0818",  "0817", "0909", "0908"];
      return validPrefixes.some(prefix => number.startsWith(prefix));
    }
    // Regular expression pattern to validate phone numbers
    const phonePattern = /^[0-9]{11}$/;

    if (networkSelect.value === "network") {
      alert("Please choose a network.");
      return false;
    }

    if (phoneInput.value.trim() === "" || !phonePattern.test(phoneInput.value)) {
      alert("Please enter a valid 11-digit phone number.");
      return false;
    }

    if (amountInput.value.trim() === "" || isNaN(amountInput.value)) {
      alert("Please enter a valid amount.");
      return false;
    }
    if (!isValidPhoneNumber(phoneInput.value)) {
      alert("Please enter a valid phone number.");
      return false;
    }

    return true; // Form is valid and can be submitted
  }

  document.querySelector("form").addEventListener("submit", function (event) {
    if (!validateForm()) {
      event.preventDefault(); // Prevent the form from being submitted
    }
  });

</script>
<!-- javascript ends here -->
    
</body>
</html>