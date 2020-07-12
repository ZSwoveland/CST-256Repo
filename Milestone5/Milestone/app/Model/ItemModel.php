<?php
class Item{

private $name;
private $pay;
private $exp;
private $education;
private $skills;


public function _construct(){
   
}

public function getName(){
    return $this->firstName;
}

public function setName($Name){
    
    $this->name = $Name;
}

public function getPay(){
    return $this->pay;
}

public function setPay($Pay){
    
    $this->pay = $Pay;
}


public function getExp(){
    return $this->exp;
}

public function setExp($Exp){
    
    $this->exp = $Exp;
}

public function getEducation(){
    return $this->education;
}

public function setEducation($Education){
    $this->education = $Education;
}

public function getSkills(){
    return $this->skills;
}

public function setSkills($Skills){
    $this->skills = $Skills;
}


}
?>