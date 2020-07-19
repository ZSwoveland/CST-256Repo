<?php
namespace App\Model;



class UserModel{

    private $username;
    private $password;
    private $firstname;
    private $lastname;
    private $email;
    private $second;
    private $salary;
    private $phone;
    private $job;
    private $resume;
    private $role;


    public function _construct(){
       
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($firstname){
        
        $this->firstname = $firstname;
    }

    public function getLastName(){
        return $this->lastname;
    }

    public function setLastName($lastname){
        
        $this->lastname = $lastname;
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

    public function setPassword($password){
        $this->password = $password;
    }

    public function getEmail(){
        return $this->emial;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSecond(){
        return $this->second;
    }

    public function setSecond($second){
        $this->second = $second;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($Phone){
        $this->phone = $Phone;
    }

    public function getJob(){
        return $this->job;
    }

    public function setJob($job){
        $this->job = $job;
    }

    public function getResume(){
        return $this->resume;
    }

    public function setResume($resume){
        $this->resume = $resume;
    }

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }

}
?>