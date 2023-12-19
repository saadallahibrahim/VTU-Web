<?php
require "connector.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>epins</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="epin.css">
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
            <h1>Print Recharge Cards (ePINs) for all Networks (MTN, Glo, Airtel & 9mobile) Online in Nigeria - Get Instant & Legit Value | Print 68 Airtime Vouchers per Page (A4 Paper) | Use Regular Recharge Codes | 1% Discount</h1>
            <div class="airtime_form">
            <form action="">
                <label for="network">Network <span> *</span></label><br>
                <select name="network" id="network">
                    <option value="network">Choose Network</option>
                    <option value="Mtn">Mtn</option>
                    <option value="Glo">Glo</option>
                    <option value="Airtel">Airtel</option>
                    <option value="9mbile">9mobile</option>
                </select><br>
                <label for="phone"> Value (denomination)<span> *</span></label><br>
                <select name="value" id="">
                <option value="network">Choose value (denomination)</option>
                    <option value="Mtn">100</option>
                    <option value="Glo">200</option>
                    <option value="Airtel">500</option>
                    <option value="9mbile">1000</option>
                </select>
                <label for="amount">quantity <span> *</span></label><br>
                <select name="value" id="">
                <option value="network">Choose quantity</option>
                    <option value="Mtn">4</option>
                    <option value="Glo">12</option>
                    <option value="Airtel">34</option>
                    <option value="9mbile">68</option>
                </select><br><br><b>
                <label for="amount">business name <span> *</span></label><br>
                <input type="phone number" placeholder="Enter business name to print on the recharge cards" name=""><br>
                <input type="submit" value="continue" name="proceed" class="submit">
            </form>
            </div>
        </div>
    </section>


    <section class="picture">
        <div class="photo">
            <img src="ePINs-Sample-1024x494.png" alt="">
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
    const denominationSelect = form.elements["denomination"];
    const quantitySelect = form.elements["quantity"];
    const businessNameInput = form.elements["business_name"];

    if (networkSelect.value === "network") {
      alert("Please choose a network.");
      return false;
    }

    if (denominationSelect.value === "denomination") {
      alert("Please choose a denomination (value).");
      return false;
    }

    if (quantitySelect.value === "quantity") {
      alert("Please choose a quantity.");
      return false;
    }

    if (businessNameInput.value.trim() === "") {
      alert("Please enter a business name.");
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