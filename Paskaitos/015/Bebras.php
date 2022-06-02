<?php
class Bebras {

    public $tail = 'Long';   // tik deklaracija (jokiu funkciju ar skaiciavimu)
    private $age = 23;

    public function whatIsYourAge() {  //getter
        echo '<br>' . 'Labas' . '<br>';
        echo '<br>' . $this->age . '<br>';
    }

    public function changeAge(int $age) {  //setter  // int $age - strong type (turi butinai paduot tokio tipo reiksme)
        if ($age > 25) {
            return;
        }
        $this->age = $age;


    }





}