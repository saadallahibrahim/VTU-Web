<?php


require "connector.php";

// SELLECTING ALL THE DATA FROM THE USER USING THE STAR BUT for a single

$sql = "SELECT * FROM customer_data";
$result = mysqli_query($connection,$sql);
$num_rows = mysqli_num_rows($result);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
html{
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}
:root{
    --font-size: 1rem;
    --font-family: "fraunce", serif;
    --font-weight: bolder;
    --text-transform: capitalize;
    --background-color: #2f3c7e;
    --color: #fff;
    --transition: .2s;
    --background-color2: #fbeaeb;
    /* the second variables here*/
    --font-size2: 1.6rem;
    --font-family2: sans;
}
/* the header styling start here */
.header{
    width: 100%;
    padding: 1% 10%;
    display: flex;
    align-items: center;
    background-color: var(--background-color);
    position: fixed;
}
.logo{
    width: 110px;
    height: 50px;
    margin-right: auto;
}
nav .logo{
    display: none;
}
nav ul{
    list-style: none;
    display: flex;
}
nav ul li a{
    color: var(--color);
    padding: 10px;
    text-decoration: none;
    font-size: var(--font-size);
    text-transform: uppercase;
    letter-spacing: 1.2px;
    font-family: var(--font-family);
    position: relative;
}
nav ul li a::before{
    content: '';
    width: 100%;
    height: 2px;
    left: 0;
    bottom: 0;
    background-color: var(--color);
    position: absolute;
    transform: scaleX(0);
    transform-origin: right;
    transition:transform .4s linear;
}
nav ul li a:hover::before{
    transform: scaleX(1);
    transform-origin: left;
}
nav .fa{
    display: none;
}
.header .fa{
    display: none;
}
.data{
    display: flex;
    justify-content: center;
    align-items: center;
}
.data table{
    margin-top: 7%;
}
table{
    border-collapse: collapse;
    width: 80%;
    padding: 10px;
}
table tr th{
    padding: 10px;
}
table tbody{
    text-align: center;
}
    </style>
<body>

    <!-- the header section -->
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
                   <a href="sign-up.html"> <i class="fa fa-user-plus">register</i></a>
                </div>
        </nav>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </section>
    <!--
        the header section ends here.
    -->

    <!-- the header section end-->
    <div class="data">
    <table border= " 2px" width=" 50%" padding="10px">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>phone number</th>
            <th>Edit</th>
            <th>delete</th>
        </tr>
        <tbody>

        <?php 
        if($num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $edit_link = "editprofile.php?user_id="  .$row['id'];
                $delete_link = "delete.php?user_id=" .$row['id'];
                    
                $output = "
                <tr>
                <td>".$row['id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone_number']."</td>
                <td><a href=".$edit_link."><button>Edit</button></a></td>
                <td><a href=".$delete_link."><button>delete</button></a></td>

                </tr>";
                echo $output;
            }
        }
        ?>
            

        </tbody>
    </table>
    </div>
    
</body>
</html>