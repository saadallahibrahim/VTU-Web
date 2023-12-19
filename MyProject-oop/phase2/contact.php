<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
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
    <?php
    require "conect.php";
    session_start();
    
    if(isset($_POST['proceed'])){
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone-number']));
        $mssg = htmlspecialchars(trim($_POST['text_area']));

        if(empty($name)){
            echo "<script>alert('name field is required!')</script>";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('Email field is required!')</script>";
        }elseif(empty($phone)){
            echo "<script>alert('phone number field is required!')</script>";
        }elseif(empty($mssg)){
            echo "<script>alert('meassage area is required!')</script>";
        }
        else{
            $query = "INSERT INTO customer_message (id,name,email,phone-number,text_area) VALUES(null, '$name', '$email', '$phone', '$mssg')";
            $result = mysqli_query($conection,$query) OR die(mysqli_error($conection));
            if($result){
                echo "<script>alert('thank you for your message, a short reply will reach you shortly!')</script>";
            }
            else{
                echo "<scrip>('error occured')</script>";
            }
        }
    }
    ?>
    <!-- the airtime field start here. -->
    <section class="data">
        <div class="content">
            <h1>contact us!</h1>
            <div class="data_form">
                
                <form action="" id="myForm" method="POST">
                <label for="network">name <span> *</span></label><br>
                <input type="Name" placeholder="ibrahim" name="name" 
                     ><br>
                     <label for="network">email <span> *</span></label><br>
                    <input type="email" placeholder="Name@gmail.com" name="email"
                    ><br>
                    <label for="network">phone number <span> *</span></label><br>
                    <input type="phone-number" placeholder="081....."  class="phone" name="phone-number"
                    ><br>  
                    <label for="network">your message here <span> *</span></label><br>
                    <textarea id="" cols="58" rows="10" placeholder="Your Message" name="text_area"
                    ></textarea><br>
                    <input type="submit" value="continue" name="proceed" class="submit">
                </form>
            </div>
            <span id="successMessage"></span>
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
                <a href="contact.php">Contact</a>
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



//     function validateForm() {
//   const form = document.getElementById("myForm");
//   const nameInput = form.elements["name"];
//   const emailInput = form.elements["email"];
//   const phoneInput = form.elements["phone-number"];
//   const messageInput = form.elements["your-message"];

//   if (nameInput.value.trim() === "") {
//     alert("Please enter your name.");
//     return false;
//   }

//   if (emailInput.value.trim() === "" || !isValidEmail(emailInput.value)) {
//     alert("Please enter a valid email address.");
//     return false;
//   }

//   if (phoneInput.value.trim() === "" || !isValidPhoneNumber(phoneInput.value)) {
//     alert("Please enter a valid phone number.");
//     return false;
//   }

//   if (messageInput.value.trim() === "") {
//     alert("Please enter your message.");
//     return false;
//   }

//   // If all validations pass, show the success message
//   document.getElementById("successMessage").style.display = "block";
//     alert("thank you for messaging us, a short reply shall reach you shortly!")
//   // Prevent the form from submitting to the server
//   return false;
// }

// function isValidEmail(email) {
//   // Simple email validation using regular expression
//   const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//   return emailPattern.test(email);
// }

// function isValidPhoneNumber(phone) {
//   // Simple phone number validation (you can customize it)
//   const phonePattern = /^\d{10}$/;
//   return phonePattern.test(phone);
// }



</script>


<!-- javascript ends here -->
    
</body>
</html>