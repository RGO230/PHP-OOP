<?php
include_once 'animal.php';
class Chicken extends Animal{
    private  $initial_chicken_arr = [];
    public function __construct()
    {
        $this->initial_chicken_arr = range(1,20);
        foreach ( $this->initial_chicken_arr as $animal_id=>$animal){
            $this->initial_chicken_arr[$animal_id=rand(1000,2000)]=$animal;
         }
        
         $this->initial_chicken_arr = array_diff_key($this->initial_chicken_arr,range(1,20));
        $chicken_number = $this->initial_chicken_arr[array_key_last($this->initial_chicken_arr)];
        echo('Изначальное количество кур в хлеву:'.$chicken_number."\n");
    }
    public function harvest(){
        $eggs_count = 0;
        for($i=0;$i<=7;$i++){
        for ($j=0; $j<=count($this->initial_chicken_arr); $j++){
           $eggs_count += rand(0,1);
        }
    }
        echo ('Cбор яиц:'.$eggs_count."\n");
    }
    public function addAnimal()
    {   for($i=1;$i<=5;$i++){
        array_push($this->initial_chicken_arr, count($this->initial_chicken_arr)+1);
    }
       echo ('Кур после покупки:'.$this->initial_chicken_arr[array_key_last($this->initial_chicken_arr)]."\n");
        
    }
}
