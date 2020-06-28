<?php
namespace App\Services\Business;

require_once('SecurityDAO.php');
require_once('UserModel.php');

class SecurityService{

    public function _construct(){

    }

    public function login(UserModel $um){
         $sd = new SecurityDAO();
        if($sd->findByUser($um) == true){
            echo "User is found";
        }
        else{
            echo "User is not found";
        }
    }

}
?>