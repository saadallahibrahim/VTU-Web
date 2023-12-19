<!-- <a href="../Mail/mail.php"></a> -->

<?php 
require "../../core/Mail/mail.php";
class userAuth{

 private $username;
 private $email;
 private $password;
 private $phone_no;
 private $cPassword;
 private $err_msg;
 private $token;
 private $link;
 private $conn;
 private $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z]{2,3})$^";
 // pattern for the password
private  $number;
 private $uppercase;
 private $lowercase;
 private $specialChars ;
 private mail $mailingservice;


 public function __construct($conn)
 {
     $this->conn =  $conn;
 }



 public function setUsername($username){
    $this->username = $username;
 }

 public function setEmail($email){
    $this->email = $email;
 }

 public function setPassword($password){
    $this->password = $password;
 }
 public function setPhoneNo($phone_no){
    $this->phone_no = $phone_no;
 }

 public function setcPassword($cpassword){
    $this->cPassword = $cpassword;
 }
 public function setToken($token){
    $this->token = $token;
 }

 public function setPatterns(){
  $this->number  = preg_match('@[0-9]@', $this->password);
  $this->uppercase  = preg_match('@[A-Z]@', $this->password);
  $this->lowercase =  preg_match('@[a-z]@', $this->password);
  $this->specialChars = preg_match('@[^\w]@', $this->password);
 }


 public function signUp(){
    $hashed_password = sha1($this->password);
   
    $query = "INSERT INTO customer_data (id,username,email,password,phone_number,token) VALUES(null, '$this->username', '$this->email', '$hashed_password', '$this->phone_no','$this->token')"; 
    $result =  mysqli_query($this->conn, $query);
    if($result){
        return true;
    }


  return false;

 }


 public function validateData(){

    if(empty($this->username)){

        $this->err_msg = "username field is required";
       
    }elseif(!preg_match("/^[a-zA-z]*$/",$this->username)){
        $this->err_msg = "Only alphabets and whitespace are allowed.";
       
    }elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        $this->err_msg = "email field is required.";

    }elseif(!preg_match ($this->pattern, $this->email)){
        $this->err_msg ="email not valid";
        
    }elseif(strlen($this->password) <8 || !$this->number || !$this->uppercase || !$this->lowercase || !$this->specialChars){
       $this->err_msg = "Password should at least 8 characters in length and must contain at leaset one number, one uppercase letter, one lowercase letter and one special character.";
    }elseif(empty($this->cPassword)){
       $this->err_msg = "Comfirm password field is required.";
    }elseif($this->cPassword !== $this->password){
       $this->err_msg = "Password does not match.";
    }elseif(empty($this->phone_no)){
        $this->err_msg = "Phone number field is required.";
    }elseif(strlen ($this->phone_no) <11){
       $this->err_msg = "invalid phone number.";
    }elseif(strlen ($this->phone_no) >11){
      $this->err_msg ="invalid phone number(you inserted more than eleven <N>";
    }elseif(!preg_match ('/^[0-9]*$/', $this->phone_no)){
       $this->err_msg = "Only numeric value is allowed.";
    }else{
        $this->err_msg = null;

    }
    return $this->err_msg;

 }


 public function getErrorMsg(){
    return $this->err_msg;
 }


 public function isEmailAvailable(){
    $emailExists =  false;
    $sql =  "SELECT email FROM customer_data WHERE email  = '$this->email' ";
    $result =  mysqli_query($this->conn , $sql);
    if(mysqli_num_rows($result)>0){
    
        $emailExists = true;
     }
    return $emailExists;
 }


 public function isUsernameAvailable(){
    $usernameExists =  false;
    $sql =  "SELECT username FROM customer_data WHERE username  = '$this->username' ";
    $result =  mysqli_query($this->conn , $sql);
    if(mysqli_num_rows($result)>0){
    
        $usernameExists = true;
     }
    return $usernameExists;
 }


 public function set_mail(mail $mailingservice)
    {
        $this->mailingservice = $mailingservice;
    }

    public function get_mail_service()
    {
        return $this->mailingservice;
    }



public function setLink($link){


    $this->link = $link;
}

public function getLink(){
    return $this->link;
}


public function saveToken(){
   $query = "INSERT INTO forget_password (id,email,token) VALUES(null, '$this->email', '$this->token')";
   $sql = "UPDATE customer_data SET token = '$this->token' WHERE email = '$this->email'";

    $result = mysqli_query($this->conn,$query);
    if($result){
      mysqli_query($this->conn, $sql);
      return true;
    }
    return false;
}


}






























?>