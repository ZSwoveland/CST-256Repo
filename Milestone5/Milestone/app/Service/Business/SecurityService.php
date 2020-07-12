<?php
namespace App\Service\Business;

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

    public function add(UserModel $um){
        $sd = new SecurityDAO();
        if($sd->addtoDB($um) == true){
            echo "Data added successfully";
        }
        else{
            echo "Data was not added";
        }
    }

    public function AddPost(Item $um){
        $sd = new SecurityDAO();
        if($sd->addPostDB($um) == true){
            echo "Data added successfully";
        }
        else{
            echo "Data was not added";
        }
    }
    public function EditPost(Item $um){
        $sd = new SecurityDAO();
        if($sd->editPostDB($um) == true){
            echo "Data added successfully";
        }
        else{
            echo "Data was not added";
        }
    }
    public function DeletePost(Item $um){
        $sd = new SecurityDAO();
        if($sd->deletePostDB($um) == true){
            echo "Data added successfully";
        }
        else{
            echo "Data was not added";
        }
    }

    public function AddGroup(Group $um){
        $sd = new SecurityDAO();
        if($sd->addGroupDB($um) == true){
            echo "Data added successfully";
        }
        else{
            echo "Data was not added";
        }
    }
    public function EditGroup(Group $um){
        $sd = new SecurityDAO();
        if($sd->editGroupDB($um) == true){
            echo "Data added successfully";
        }
        else{
            echo "Data was not added";
        }
    }
    public function DeleteGroup(Group $um){
        $sd = new SecurityDAO();
        if($sd->deleteGroupDB($um) == true){
            echo "Data added successfully";
        }
        else{
            echo "Data was not added";
        }
    }

    public function JobSearch(Job $um){
        $sd = new SecurityDAO();
        $sd->searchJob($um);
    }

}
?>