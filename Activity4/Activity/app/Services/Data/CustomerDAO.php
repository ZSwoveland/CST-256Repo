<?php
require_once 'Business/OrderService.php';

Class CustomerDAO{
    private $conn;
    public function _construct($conn){
        $this->conn = $conn;
    }
    
    public function addCustomer($firstName,$lastName){
       

        // Check connection
        if ($this->conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $this->conn-> connect_error;
        exit();
        }

         // Perform query
         if ($result = $this->conn-> query("Insert Into customer First_Name, Last_Name". Values .$firstName.",".$lastName ."")) {
          return true;
        }
        else{
            return false;
        }
    }


}