<?php

require_once 'Data/OrderDAO.php';
require_once 'Data/CustomerDAO.php';

class OrderService{

public function _construct(){

}

    public function conn(){
        $mysqli = new mysqli("80","root","12345","activity2") or die("Connect failed: %s\n". $conn -> error);

        return $mysqli;
    }

    public function closeConn($conn){
        $conn->close();
    }
    public function createOrder($firstName,$lastname,$product){

        $this->conn()->autocommit(false);
        $this->conn()->begin_transaction();
        $od = new OrderDAO($conn());
        $od->addOrder($product);
        $cd = new CustomerDAO($conn());
        $cd->addCustomer($firstName,$lastname);
        $this->conn()->commit();

    }

}