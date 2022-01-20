<?php
namespace Users;
class Bike extends User{
    protected $freeParking;
    protected $persons;

    public function __construct($model, $name, $persons, $freeParking){
        $this->model=$model;
        $this->name=$name;
        $this->persons=$persons;
        $this->freeParking=$freeParking;

    }

    public function setFreeParking($freeParking){
        $this->freeParking = $freeParking;
    }
    public function getFreeParking(){
        return $this->freeParking;
    }

}