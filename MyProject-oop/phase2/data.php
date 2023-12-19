
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
    <title>Buy/Resell Cheap Data Bundles Online - Instant Delivery!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="subbing.css">
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
            <h1>Buy/Resell Cheap Data Bundles Online - Instant Delivery!</h1>
            <div class="data_form">
                
                <form action="./Controller/Transaction/transaction.php" method="Post" id="myForm">
                    <label for="network">Network <span> *</span></label><br>
                    <select name="network" id="network" onchange="updatePrice()">
                        <option value="network">Choose Network</option>
                        <option value="Mtn">Mtn</option>
                        <option value="Glo">Glo</option>
                        <option value="Airtel">Airtel</option>
                        <option value="Etisalat">Etisalat</option>
                    </select><br>
                    <label for="data plan">Data plan <span> *</span></label>
                    <select name="plan" id="data_plan" onchange="updatePrice()">
                    <option value="select">Choose Mtn data plan</option>
                        <option value="plan1">500MB (Gift) - 30 Days</option>
                        <option value="plan2">1GB (Gift) - 30 Days</option>
                        <option value="plan3">2GB (Gift) - 30 Days</option>
                        <option value="plan4">3GB (Gift) - 30 Days</option>
                        <!-- <option value="plan5">5GB (Gift) - 30 Days</option>
                        <option value="plan6">10GB (Gift) - 30 Days</option> -->
                    <optgroup value=""></optgroup>
                        <option value="select">choose glo data plan</option>
                        <option value="plan5">500MB (Gift) - 30 Days</option>
                        <option value="plan6">1GB (Gift) - 30 Days</option>
                        <option value="plan7">2GB (Gift) - 30 Days</option>
                        <option value="plan8">3GB (Gift) - 30 Days</option>
                        <!-- <option value="plan11">5GB (Gift) - 30 Days</option>
                        <option value="plan12">10GB (Gift) - 30 Days</option> -->
                    <optgroup value=""></optgroup>
                        <option value="select">choose Airtel data plan</option>
                        <option value="plan9">500MB (Gift) - 30 Days</option>
                        <option value="plan10">1GB (Gift) - 30 Days</option>
                        <option value="plan11">2GB (Gift) - 30 Days</option>
                        <!-- <option value="plan12"></option> -->
                        <!-- <option value="plan13"></option>
                        <option value="plan14"></option> -->
                    <optgroup value=""></optgroup>
                        <option value="select">choose Etisalat data plan</option>
                        <option value="plan12">1GB - 30 days</option>
                        <option value="plan13">2.5GB - 30 days</option>
                        <option value="plan14">11GB - 30 days</option>
                        <option value="plan15"></option>
                        <!-- <option value="plan16"></option>
                        <option value="plan17"></option> -->
                        <!-- <option value="plan21"></option>
                        <option value="plan21"></option> -->
                    </select>
                    <label for="price">Price <span> *</span></label>
                    <input type="text" placeholder="Price will show here." name="amount" id="price"><br>
                    <label for="phone">Phone <span> *</span></label>
                    <input type="phone" placeholder="Enter phone number" name="phone"><br>
                    <input type="submit" value="continue" name="buy-data" class="submit">
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




    // var dataLists = {
    //                 Mtn: { "choose data plan": "choose data plan", "500MB": "500MB (Gift) - 30 Days", "1GB": "1GB (Gift) - 30 Days", "2GB": "2GB (Gift) - 30 Days","3GB": "3GB (Gift) - 30 Days", "5GB": "5GB (Gift) - 30 Days", "10GB": "10GB (Gift) - 30 Days", "40GB": "40GB - 30 Days", "75GB": "75GB - 30 Days"}
    //                , Glo: {"choose data plan": "choose data plan", "500MB": "500MB (Gift) - 30 Days", "1GB": "1GB (Gift) - 30 Days", "2GB": "2GB (Gift) - 30 Days", "3GB": "3GB (Gift) - 30 Days", "5GB": "5GB (Gift) - 30 Days", "10GB": "10GB (Gift) - 30 Days"}
    //                , Airtel: { "choose data plan": "choose data plan", "500MB": "500MB (Gift) - 30 Days", "1GB": "1GB (Gift) - 30 Days", "2GB": "2GB (Gift) - 30 Days", "5GB":"5GB (Gift) - 30 Days", "10GB": "10GB (Gift) - 30 Days", "15GB": "15GB (Gift) - 30 Days", "20GB": "20GB (Gift) - 30 Days", "750MB": "750MB - 14 days", 
        // "1.5GB": "1.5GB - 30 days", "4.5GB": "4.5GB - 30 days", "2GB": "2GB - 30 days", "3GB": " 3GB - 30 days", "10GB": "10GB - 30 days", "20GB": "20GB - 30 days", "40GB": "40GB - 30days",}
    //                , Etisalat: {"choose data plan": "choose data plan", "1GB": "1GB - 30 days", "2.5GB": "2.5GB - 30 days", "11GB": "11GB - 30 days", "15GB": "15GB - 30 days"}

    //             }

    //             var select = document.getElementById('data_plan')

    //             function setNetworks(details){
    //                 if(details.value){
    //                     select.options.length = 0
    //                     var list = dataLists[details.value]
    //                     for (key in list){
    //                         var opt = document.createElement('option');
    //                         opt.value = key;
    //                         opt.innerHTML = list[key];
    //                         select.appendChild(opt);
    //                     }
    //                 }
    //             }

    function updatePrice() {
        const networkSelect = document.getElementById("network");
        const dataPlanSelect = document.getElementById("data_plan");
        const priceInput = document.getElementById("price");
      
        // Define price values for different network and data plan combinations
        const prices = {
          Mtn: {
            plan1: 159,
            plan2: 289,
            plan3: 579,
            plan4: 869,
            // plan5: 1,449,
            // plan6: 2,899,
          },
          Glo: {
            plan5: 159.00,
            plan6: 299.00,
            plan7: 599.00,
            plan8: 899.00,
            // plan11: 1,499.00,
            // plan12: 2,899.00,

          },
          Airtel: {
            plan9: 199.00,
            plan10: 299.00,
            plan11: 599.00,
          },
          Etisalat: {
            plan12: 989.00,
            // plan13: 1,989,
            // plan14: 7,969.00,
          },
        };
      
        const selectedNetwork = networkSelect.value;
        const selectedDataPlan = dataPlanSelect.value;
      
        if (selectedNetwork in prices && selectedDataPlan in prices[selectedNetwork]) {
          const price = prices[selectedNetwork][selectedDataPlan];
          priceInput.value = price;
        } else {
          priceInput.value = ""; // Clear the price input if the combination is not found
        }
      }


            
  function validateForm() {
    const form = document.getElementById("myForm");
    const networkSelect = form.elements["network"];
    const dataPlanSelect = form.elements["data_plan"];
    const phoneInput = form.elements["phone"];

    // Function to check if a phone number starts with any of the specified prefixes
    function isValidPhoneNumber(number) {
        // this only validate the existing prefixs not that validate prefix on each networs
      const validPrefixes = ["0805", "0807", "0705", "0815", "0811", "0905",  "0915",  "0802",
        "0808",  "0708",  "0812",  "0701",  "0902",  "0901",  "0904",  "0907",  "09012", 
      "0803",  "0806",  "0703",  "0706",  "0813",  "0816",  "0810",  "0814",  "0903",  "0906", 
       "0913",  "0916",  "07025",  "07026",  "0704", "0809",  "0818",  "0817", "0909", "0908","0810"];
      return validPrefixes.some(prefix => number.startsWith(prefix));
    }

    if (networkSelect.value === "network") {
      alert("Please choose a network.");
      return false;
    }

    if (dataPlanSelect.value === "select") {
      alert("Please choose a data plan.");
      return false;
    }

    if (phoneInput.value.trim() === "") {
      alert("Please enter a phone number.");
      return false;
    }

    if (!isValidPhoneNumber(phoneInput.value)) {
      alert("Please enter a valid phone number.");
      return false;
    }

    // If all validation passes, the form will be submitted
    return true;
  }

  document.getElementById("myForm").addEventListener("submit", function (event) {
    if (!validateForm()) {
      event.preventDefault(); // Prevent the form from being submitted
    }
  });






</script>


<!-- javascript ends here -->
    
</body>
</html>