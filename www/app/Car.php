<?php
namespace Users;
class Car extends User {
    protected $persons;
    protected $maxSpeed;

    public function __construct($model, $name, $persons){
        $this->model=$model;
        $this->name=$name;
        $this->persons=$persons;

    }
    public function setMaxSpeed($maxSpeed){
        $this->maxSpeed=$maxSpeed;
    }
    public function setPersons($persons){
        $this->persons=$persons;
    }
    public function geMaxSpeed(){
        return $this->maxSpeed;}
    public function getPersons(){
        return $this->persons;}
}