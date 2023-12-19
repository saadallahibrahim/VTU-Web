



<?php  

require_once "../../config/db_connector.php";
require_once "../../core/Transaction/airtime.php";
require_once "../../core/Transaction/data.php";
session_start();
if(isset($_POST['buy-airtime'])){
    $id =  htmlspecialchars(trim($_SESSION['id']));
    $network = htmlspecialchars(trim($_POST['network']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $amount =  htmlspecialchars(trim($_POST['amount']));
    

    $connection  =  new db_connector();
    $conn =  $connection->getConnection(); 

    $save_transaction =  new airtime($conn,$id);
    $save_transaction->set_amount($amount);
    $save_transaction->set_network($network);
    $save_transaction->set_phone($phone);
    $save_transaction->set_new_amount($_SESSION['amount']);
    if($amount > $_SESSION['amount']){
     
       // echo "<script>alert('Insufficient Balance')</script>";
        header("Location: ../../airtime.php?message=Insufficient Balance");
        

    }else{
        if($save_transaction->saveTransaction()){
       
            header("Location: ../../dashboard.php?message=Transaction successfull");
        }else{
    
            // echo "<script>alert('Transaction Failed')</script>";
            header("Location: ../../airtime.php?message=Transaction Failed");
    
        }
    }
}


    if(isset($_POST['buy-data'])){
        $id =  htmlspecialchars(trim($_SESSION['id']));
        $network = htmlspecialchars(trim($_POST['network']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $amount =  htmlspecialchars(trim($_POST['amount']));
        $dataPlan =  htmlspecialchars(trim($_POST['plan']));
        
    
        $connection  =  new db_connector();
        $conn =  $connection->getConnection(); 
    
        $save_transaction =  new data($conn,$id);
        $save_transaction->set_amount($amount);
        $save_transaction->set_network($network);
        $save_transaction->set_phone($phone);
        $save_transaction->set_new_amount($_SESSION['amount']);
        $save_transaction->set_plan($dataPlan);
        if($amount > $_SESSION['amount']){
         
           // echo "<script>alert('Insufficient Balance')</script>";
            header("Location: ../../data.php?message=Insufficient Balance");
            
    
        }else{
            if($save_transaction->saveTransaction()){
           
                header("Location: ../../dashboard.php?message=Transaction successfull");
            }else{
        
                // echo "<script>alert('Transaction Failed')</script>";
                header("Location: ../../data.php?message=Transaction Failed");
        
            }
        }
       




}















?>