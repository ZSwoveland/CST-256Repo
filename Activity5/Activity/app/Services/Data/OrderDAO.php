<?php

require_once 'Business/OrderService.php';

Class OrderDAO{
    private $conn;
    public function _construct($conn){
        $this->conn = $conn;
    }
    
    public function addOrder($product){
      

        // Check connection
        if ($this->conn() -> connect_errno) {
        echo "Failed to connect to MySQL: " . $this->conn() -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $this->conn() -> query("Insert Into order Product" . Values .$product."")) {
          return true;
        }
        else{
            return false;
        }
    }
}