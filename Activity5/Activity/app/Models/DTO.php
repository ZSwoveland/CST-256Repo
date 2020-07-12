<?php
namespace App\Model;



class DTO implements JsonSerializable{

private $errorCode;
private $errorMessage;
private $data;

    public function _construct($errorCode, $errorMessage, $data){
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->date = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

}