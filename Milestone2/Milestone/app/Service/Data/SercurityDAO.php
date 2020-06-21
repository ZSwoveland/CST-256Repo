<?php
namespace App\Service\Data;

require_once('UserModel.php');

class SecurityDAO{
    
    public function _construct(){

    }
    public function findByUser(UserModel $usermodel){
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
        
        }
        else{
         
           return false;
        }
    }

    public function addtoDB(UserModel $um){
        $mysqli = new mysqli("80","root","12345","activity2");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $mysqli -> query("Insert Into users FirstName, LastName, Email, State, MemberShip, Zip Values ".$um->getFirstName().",".$um->getLastName().",".$um->getEmail().",".$um->getState().",".$um->getRole().",".$um->getZip()."")) {
          return true;
        }
        else{
            return false;
        }
    }
}
?>
