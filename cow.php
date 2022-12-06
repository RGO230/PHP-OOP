<?php
include_once 'animal.php';
class Cow extends Animal{
    private $initial_cows_arr=[];
    public function getInitial()
    {
         $this->initial_cows_arr = range(1,10);
         foreach ( $this->initial_cows_arr as $animal_id=>$animal){
            $this->initial_cows_arr[$animal_id=rand(1000,2000)]=$animal;
         }
         $this->initial_cows_arr = array_diff_key($this->initial_cows_arr,range(1,10));
         $cow_number = $this->initial_cows_arr[array_key_last($this->initial_cows_arr)];
         echo('Изначальное количество коров в хлеву:'.$cow_number."\n");
    }
    
    public function harvest(){
        $milk_count = 0;
        for($i=0;$i<=7;$i++){
        for ($j=0; $j<=count($this->initial_cows_arr); $j++){
           $milk_count += rand(8,12);
        }
    }
        echo ('Cбор молока:'.$milk_count."\n");


    }
    public function addAnimal()
    {
        array_push($this->initial_cows_arr, count($this->initial_cows_arr)+1);
       echo ('Коров после покупки:'.$this->initial_cows_arr[array_key_last($this->initial_cows_arr)]."\n");

        
    }
}

