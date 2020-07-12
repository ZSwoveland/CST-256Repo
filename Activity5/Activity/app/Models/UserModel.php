<?php
namespace App\Model;



class UserModel implements JsonSerializable{

    private $username;
    private $password;


    public function _construct(){
       
    }

    
    public function jsonSerialize() {
        return get_object_vars($this);
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        
        $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function serPassword($password){
        $this->password = $password;
    }

}
?>