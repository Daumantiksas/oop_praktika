<?php
namespace Users;

class User{
    protected $wheels;
    protected $model;
    protected $name;
    protected $price;
    protected $weight;


    public function __construct($model, $name, $wheels, $price, $weight){
        $this->model = $model;
        $this->name =$name;
        $this->wheels =$wheels;
        $this->price=$price;
        $this->weight=$weight;
    }
    //<---->
   public function setWheels($wheels){
        $this->wheels=$wheels;}
   public function setModel($model){
        $this->model=$model;}
    public function setName($name){
        $this->name=$name;}
    public function setPrice($price){
        $this->price=$price;}
    public function setWeigth($weight){
        $this->weight=$weight;}
    //<------>
    public function getWheels(){
        return $this->wheels;}
    public function getModel(){
        return $this->model;}
    public function getName(){
        return $this->name;}
    public function getPrice(){
        return $this->price;}
    public function getWeight(){
        return $this->weight;}



    public function __toString(){
        return $this->model.' '. $this->name;
    }
}





//    public function addDescription($description){
//        $this->description =$description;
//    }



//$userOne->addDescription('geras vyras');

