<?php
require "connector.php";

if(isset($_GET['token'])){
    $token = trim($_GET['token']);
    $sql = 'UPDATE  customer_data SET email_verify = 0  WHERE token = "'.$token.'" ';
    $result =  mysqli_query($connection, $sql);
    if($result){
        header("Location: sign-in.php");

    }else{
        header("Location: sign-up.php");
    }


}

?>