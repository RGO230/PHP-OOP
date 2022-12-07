<?php
include_once 'animal.php';
include_once 'cow.php';
include_once 'chicken.php';
class Farm{
    private $animals;
    public function __construct(...$animal_class)
    {
       $this->animals = $animal_class;
    }
    public function getHarvest(){
       foreach ($this->animals as $animal){
        $animal->harvest();
       }
    }
    public function addAnimals(){
        foreach ($this->animals as $animal){
         $animal->addAnimal();
        }
     }
}


