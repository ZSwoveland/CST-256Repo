<?php
class Group{

    private $group;
    private $interest;

    public function _construct(){

    }

    public function getGroup(){
        return $this->group;
    }
    
    public function setGroup($group){
        
        $this->group = $group;
    }

    public function getInterest(){
        return $this->interest;
    }
    
    public function setName($interest){
        
        $this->interest = $interest;
    }
    
}

?>