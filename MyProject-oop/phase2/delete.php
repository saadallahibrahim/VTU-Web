<?php
require "connector.php";
$user_id = htmlspecialchars(trim($_GET['user_id']));


$sql = "DELETE FROM customer_data WHERE id = '$user_id'";
$result = mysqli_query($connection,$sql);

if($result){
    header ("location: retrieve.php");
}


?>