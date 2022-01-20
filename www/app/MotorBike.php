<?php
namespace Users;

class MotorBike extends User {
    protected $type;
    protected $persons;
    public function __construct($model, $name, $persons, $type){
        $this->model=$model;
        $this->name=$name;
        $this->persons=$persons;
        $this->type=$type;}


    public function setType($type){
        $this->type=$type;
    }
    public function getType(){
       return $this->type;}



}