<?php


// session_start();

// if(isset($_POST['proceed'])){
//     $cable = htmlspecialchars(trim($_POST['cable']));
//     $package = htmlspecialchars(trim($_POST['package']));
//     $number = htmlspecialchars(trim($_POST['number']));



//     if(empty($cable)){
//         echo "<script>alert('please choose a cable tv.')</script>";
//     }
//     elseif(empty($package)){

//     }
// }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe Cable TV (GOtv, DStv & Startimes) Online - Instant Activation!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cable.css">
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
                <li><a href="">pricing</a></li>
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
    <section class="data">
        <div class="content">
            <h1>Subscribe Cable TV (GOtv, DStv & Startimes) Online - Instant Activation!</h1>
            <div class="cableTv_form">
                <form action="" >    
                    <label for="cableTv_tv">Cable Tv <span> *</span></label><br>
                    <select name="cable_tv" id="cable_tv" onchange=setCable_tv(this) name="cable">
                        <option value="DStv">choose cable tv</option>
                        <option value="DStv">DStv</option>
                        <option value="GOtv">GOtv</option>
                        <option value="Startimes">Startimes</option>
                    </select><br>
                    <label for="package_bouquet">package/Bouquet<span> *</span></label>
                    <!-- the problem here is that the prices are not attached to the network how? -->
                        <select id="package" name="package" name="package">
                            <option value="select">choose package/bouquet</option>
                        </select>
                    <label for="smartcar_number">SmartCard/IUC Number<span> *</span></label>
                    <input type="phone" placeholder="Enter SmartCard/IUC Number" name="number"><br>
                    <input type="submit" value="continue" name="proceed" class="submit">
                </form>
            </div>
            <p>Pay for your GOtv, DStv & Startimes Decoder Cables Subscriptions Online in Nigeria. Get instant activation after payment.</p>
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
                <a href="aritime.php">airtime</a>
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



                var cable_tv_lists = {
                    DStv: {"CHOOSE PACKAGE/BOUQUET": "CHOOSE PACKAGE/BOUQUET", "GREAT WALL": "GREAT WALL", "PADI": "PADI","YANGA": "YANGA", "CONFAM": "CONFAM", "ASIA": "ASIA", "COMPACT": "COMPACT", "COMPACT-PLUS": "COMPACT-PLUS", "PREMIUM": "PREMIUM", "PREMIUM-ASIA": "PREMIUM-ASIA", "PREMIUM-FRENCH": "PREMIUM-FRENCH","CONFAM-EXTRAVIEW": "CONFAM-EXTRAVIEW",
                            "YANGA-EXTRAVIEW": "YANGA-EXTRAVIEW","PADI-EXTRAVIEW": "PADI-EXTRAVIEW","COMPACT + ASIA": "COMPACT + ASIA", "COMPACT + EXTRAVIW": "COMPACT + FRENCH TOUCH", "PREMIUM- EXTRAVIEW": "PREMIUM-EXTRAVIEW","Compact Plus - Asia": "Compact Plus - Asia","Compact + French Touch + ExtraView": "Compact + French Touch + ExtraView",
                            "Compact + Asia + ExtraView": "Compact + Asia + ExtraView","Compact Plus + French Plus": "Compact Plus + French Plus","Compact Plus + French Touch": "Compact Plus + French Touch","Compact Plus - Extra View": "Compact Plus - Extra View",
                            "Compact Plus + FrenchPlus + Extra View": "Compact Plus + FrenchPlus + Extra View", "COMPACT + FRENCH PLUS": "COMPACT + FRENCH PLUS", "COMPACT PLUS + ASIA + EXTRAVIEW": "COMPACT PLUS + ASIA + EXTRAVIEW"}
                    , GOtv:  {"CHOOSE PACKAGE/BOUQUET": "CHOOSE PACKAGE/BOUQUET", "SMALLIE": "SMALLIE", "JINJA": "JINJA", "JOLLI": "JOLLI", "MAX": "MAX", "SUPA": "SUPA"}
                    , Startimes: {"CHOOSE PACKAGE/BOUQUET": "CHOOSE PACKAGE/BOUQUET", "NOVA": "NOVA", "BASIC": "BASIC", "SMART": "SMART", "CLASSIC": "CLASSIC", "SUPER": "SUPER"}

                }

                var select = document.getElementById('package')
                
                function setCable_tv(details){
                    if(details.value){
                        select.options.length = 0
                        var list = cable_tv_lists[details.value]
                        for (key in list){
                            var opt = document.createElement('option');
                            opt.value = key;
                            opt.innerHTML = list[key];
                            select.appendChild(opt);
                        }
                    }
                }


                function validateForm() {
    const form = document.querySelector("form");
    const cableTvSelect = form.elements["cable_tv"];
    const packageSelect = form.elements["package"];
    const smartCardInput = form.elements["amount"];

    if (cableTvSelect.value === "DStv") {
      alert("Please choose a cable TV service.");
      return false;
    }

    if (packageSelect.value === "select") {
      alert("Please choose a package/bouquet.");
      return false;
    }

    if (smartCardInput.value.trim() === "") {
      alert("Please enter a SmartCard/IUC Number.");
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