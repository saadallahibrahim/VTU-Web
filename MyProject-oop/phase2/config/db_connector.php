<?php


class db_connector{

private $server = "localhost";
private $username = "root";
private $password = "";
private $db_name = "vtu_app";
private $connection;

public function __construct()
{
    $this->connection = mysqli_connect($this->server,$this->username,$this->password,$this->db_name);
}

public function getConnection(){
    return $this->connection;
}


// if($connection){
//     echo "successfull";

// }else{
//     echo "something is wrong while connecting";
// }

}




?>