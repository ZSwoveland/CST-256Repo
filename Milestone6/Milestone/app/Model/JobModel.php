<?php
namespace app\Http\Model;

class JobModel{

    private $name;
    private $JobDescription;
    private $Salary;
    private $hyperlink;

   
    public function __contrutor($name,$jobD,$salary,$link){
        $this->name = $name;
        $this->JobDescription = $jobD;
        $this->Salary = $salary;
        $this->hyperlink = $link;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setName($Name){
        
        $this->name = $Name;
    }

    public function getJD(){
        return $this->JobDescription;
    }
    
    public function setJD($JD){
        
        $this->JobDescription = $JD;
    }

    public function getSalary(){
        return $this->Salary;
    }
    

    public function setSalary($sal){
        $this->Salary = $sal;
    }
    public function getLink(){
        return $this->hyperlink;
    }
    

    public function setLink($link){
        $this->hyperlink = $link;
    }

}