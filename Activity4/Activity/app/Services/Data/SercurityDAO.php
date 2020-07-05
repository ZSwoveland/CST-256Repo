<?php
namespace App\Services\Data;

require_once('UserModel.php');

class SecurityDAO{
    
    public function _construct(){

    }
    public function findByUser(UserModel $usermodel){
        Log::info("Entering SecurityDAO::findByUsser()");
        $mysqli = new mysqli("80","root","12345","activity2");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

        // Perform query
        if ($result = $mysqli -> query("SELECT * FROM users where 'USERNAME' = ".$usermodel->getUsername()." and 'PASSWORD' = ".$usermodel->getPassword()."")) {
     
        // Free result set
        $result -> free_result();
        
        return true;
        Log::info("Exiting SecurityDAO::findByUsser()");
        
        }
        else{
         
           return false;
           Log::info("Exiting SecurityDAO::findByUsser()");
        }
    }
}
?>
