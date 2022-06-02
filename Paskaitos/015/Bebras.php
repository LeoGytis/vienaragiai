<?php
// KLASES DARO ANTANAS
class Bebras {   //klase ir failo pavadinimas turi buti vienodi

    public $tail = 'Long';   // tik deklaracija (jokiu funkciju ar skaiciavimu)
    private $age = 23;
    private $name, $childrens; // jeigu to pacio galima surasyt daugiau kintamuju

    // konstruktorius veikia kiekviena objekta atksirai (pvz. rand sugeneruoja kitoki)
    public function __construct(string $n, array $c)  //pasileidizia kiekviena karta kai kuriame nauja objekta su "new"
    {
        echo '<br>Construct pasileido<br>';
        $this->whatIsYourAge();
        $this->age = rand(1,100); //galima rasyti funkcijas
        $this->whatIsYourAge();

        $this->name = $n;
        $this->childrends = $c;
    }
    
    public function whatIsYourAge() {  //getter
        echo '<br>' . 'Labas' . '<br>';
        echo '<br>' . $this->age;  
    }

    public function changeAge(int $age) {  //setter  // int $age - strong type (turi butinai paduot tokio tipo reiksme)
        if ($age > 25) {
            return;
        }
        $this->age = $age;
    }

     //Kai kreipemes uz matomumo ribu klase paleidzia get methoda
    public function __get($what)
     {  
        if (in_array($what, ['age', 'name'])) {
            return $this->$what;   //STIPRIAI ATKREIPT DEMESI KAD CIA YRA $$$ ($what)
            
        }
        echo '<br>Magic __get ===== ' . $what . '<br>';
        return '<br>Nieko nera namie<br>';
        
    }

    public function __set($where, $what)
    {
        echo '<br>Magic __set metodas<br>';
        echo $where . '----' . $what . '<br>';


    }

    public function __destruct() //pasileidzia pabaigoje (iraso ka nors ir panasiai)
    {
        echo '<br>Magic destructorius<br>';
    }
}