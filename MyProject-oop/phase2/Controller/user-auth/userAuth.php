


<?php
require_once "../../config/db_connector.php";
require_once "../../core/user_auth/userAuth.php";


if (isset($_POST['signup'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $cpassword = htmlspecialchars(trim($_POST['cpassword']));
    $phone = htmlspecialchars(trim($_POST['phone_number']));
    $hashed_password = sha1($password);
    $token = md5(rand(1000, 9999));
    
    $link = ' <a href="http://localhost/Myproject-oop/phase2/verify.php?token='.$token.' ">Click here to verify your account</a>';

    $connection   = new db_connector();
    $conn =  $connection->getConnection();
    $save_user =  new userAuth($conn);
    $save_user->setUsername($username);
    $save_user->setEmail($email);
    $save_user->setPassword($password);
    $save_user->setPhoneNo($phone);
    $save_user->setcPassword($cpassword);
    $save_user->setToken($token);
    $save_user->setLink($link);
    $save_user->setPatterns();
    $save_user->validateData();

    if ($save_user->getErrorMsg() !== null) {


        header("location: ../../sign-up.php?error=" . $save_user->getErrorMsg() . "");
    } elseif ($save_user->isEmailAvailable()) {

        header("location: ../../sign-up.php?error=email already taken");
    } elseif ($save_user->isUsernameAvailable()) {
        // echo "<script>alert('username already taken')</script>";
        header("location: ../../sign-up.php?error=username already taken");
    } else {

        $senderMail = "muhtohasulaiman@gmail.com";
        $template = "../../MailTemp/verificationMail.html";
        $subject = "Email Verification ";
        $data = ['username' => $username, 'link' => $save_user->getLink()];
        $mailService =  new mail($username, $email, $senderMail, $template, $subject, $data);
        $save_user->set_mail($mailService);
        if ($save_user->signUp() && $save_user->get_mail_service()->send_mail() == "Sent") {


            header("location: ../../sign-up.php?error=Check your email for verification Link");

        } else {
            echo $save_user->get_mail_service()->send_mail();
        }
    }
}


if(isset($_POST['send_token'])){

    $email = htmlspecialchars(trim($_POST['email']));
    $token = md5(rand(1000,9999));
    $link = ' <a href="http://localhost/myproject-oop/phase2/change_password.php?token='.$token.' && email='.$email.'">Change password</a>';
    $connection   = new db_connector();
    $conn =  $connection->getConnection();
    $reset_password =  new  userAuth($conn);
    $reset_password->setEmail($email);
    $reset_password->setToken($token);
    $reset_password->setLink($link);
    $senderMail = "muhtohasulaiman@gmail.com";
    $template = "../../MailTemp/forget_password.html";
    $subject = "Password Reset";
    $data = [ 'link' => $reset_password->getLink()];
    $mailService =  new mail('', $email, $senderMail, $template, $subject, $data);
    $reset_password->set_mail($mailService);
    if($reset_password->isEmailAvailable()){
        if ($reset_password->saveToken() && $reset_password->get_mail_service()->send_mail() == "Sent") {


            header("location: ../../sign-up.php?error=Check your email for Password Reset Link");
    
        } else {
            echo $reset_password->get_mail_service()->send_mail();
        }

    }else{
        header("location: ../../forget.php?error=This user does not exist");

       
    }
   


}

















































?>