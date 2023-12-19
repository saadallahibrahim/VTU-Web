


<?php
require_once "../../../connector.php";




if (isset($_GET['ref'])) {

    $ref = trim($_GET['ref']);
    $url = "https://api.paystack.co/transaction/verify/" . $ref;

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_3e2f88c40dd0f0550312cea8d8b283aa9b0a505f",
            "Cache-Control: no-cache",
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $data = json_decode($response, true);

    if ($data['status'] === true) {
        if ($data['data']['status'] === "success") {

            // $txnId = $data['data']['id'];
            $user_email = $data['data']['customer']['email'];
            $amount =  $data['data']['amount'] / 100;
            $ref =  $data['data']['reference'];
            $status =  $data['data']['status'];
            $user_id =  $_GET['userId'];

            // insert data into database
            $sql = "INSERT INTO wallet (id,user_id,amount,ref,email,status) VALUES(null,'$user_id','$amount','$ref','$user_email','$status')";
            $fetch = "SELECT wallet FROM customer_data WHERE id = '$user_id'";
            $result1 =  mysqli_query($connection, $fetch);
            $data = mysqli_fetch_assoc($result1);
            $new_amount = $data['wallet'] + $amount;
            $sql2 = "UPDATE customer_data SET wallet = '$new_amount' WHERE id = '$user_id'";
            $result2 = mysqli_query($connection, $sql2);




            $result =  mysqli_query($connection, $sql);

            if ($result) {
                header("Location: ../../../dashboard.php");
            }
        }
    } else {

        header("Location: ../../../dashboard.php");
    }
}




























?>