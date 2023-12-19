

<!-- <a href="../../config/db_connector.php"></a> -->

<?php 
require_once "../../config/db_connector.php";
require_once "../../core/user_auth/userAuth.php";


if(isset($_POST['signup'])){
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $cpassword = htmlspecialchars(trim($_POST['cpassword']));
    $phone = htmlspecialchars(trim($_POST['phone_number']));
    $hashed_password = sha1($password);
    $token = md5(rand(1000,9999));
    $link = "";

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

    if($save_user->validateData() !== null){
       
        header("location: ./phase2/sign-up.php");
        
    }elseif($save_user->isEmailAvailable()){
       
        header("location: ./phase2/sign-up.php");

    }elseif($save_user->isUsernameAvailable()){
       // echo "<script>alert('username already taken')</script>";
        header("location: ./phase2/sign-up.php");
    }else{
   
    $senderMail = "muhtohasulaiman@gmail.com";
    $template = "./phase2/MailTemp/verificationMail.html";
    $subject ="Email Verification ";
    $data = ['username'=> $username, 'link'=>$save_user->getLink()];
      $mailService =  new mail($username,$email,$senderMail,$template,$subject,$data);
      $save_user->set_mail($mailService);
      if($save_user->signUp() && $save_user->get_mail_service()->send_mail()){


        header("location: ./phase2/sign-in.php");
      }

    }

    }

    





    

    
   

    
   

   
    
        
    






























?>