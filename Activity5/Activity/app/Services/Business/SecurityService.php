<?php
namespace App\Services\Business;

require_once('SecurityDAO.php');
require_once('UserModel.php');

class SecurityService{

    public function _construct(){

    }

    public function getAllUsers(){
        $sd = new SecurityDAO();

        $sd->findAllUsers();
    }

    public function getUser($id){
        $sd = new SecurityDAO();

        $sd->findUserByID($id);
    }

    public function login(UserModel $um){
        Log::info("Entering SecurityService::login()");
         $sd = new SecurityDAO();
        if($sd->findByUser($um) == true){
            echo "User is found";
            Log::info("User is found");
            Log::info("Exiting SecurityService::login()");
        }
        else{
            echo "User is not found";
            Log::info("User is not found");
            Log::info("Exiting SecurityService::login()");
        }
        Log::info("Exiting SecurityService::login()");
    }

}
?>