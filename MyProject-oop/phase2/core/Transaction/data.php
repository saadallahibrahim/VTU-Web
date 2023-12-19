<?php



class data
{


    private $network;
    private $phone;
    private $amount;
    private $new_amount;
    private $dataPlan;
    private $id;
    private $conn;

    public function __construct($db, $id)
    {
        $this->conn =  $db;
        $this->id =  $id;
    }

    public function set_network($network)
    {

        $this->network =  $network;
    }

    public function set_phone($phone)
    {
        $this->phone = $phone;
    }

    public function set_amount($amount)
    {
        $this->amount =  $amount;
    }

    public function set_new_amount($db_amount)
    {
        $this->new_amount =  $db_amount - $this->amount;
    }

    public function set_plan($dataPlan){
        $this->dataPlan =  $dataPlan;
    }


    private function deductAmount()
    {
        $sql =  "UPDATE customer_data SET  wallet =  '$this->new_amount'  WHERE id =  '$this->id'";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return true;
        }
        return false;
    }

    public function saveTransaction()
    {
        $sql =  "INSERT INTO transactions (id,user_id,phone,network,amount,plan) VALUES(null,'$this->id','$this->phone','$this->network','$this->amount','$this->dataPlan')";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            if ($this->deductAmount()) {
                return true;
            }
        }
        return false;
    }
}
