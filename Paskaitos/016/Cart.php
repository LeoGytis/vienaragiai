<?php

class Cart {

    public $id;
    static private $cart;
    const BAD = 'klasine'; // konstanta uzrasoma didziosiomis raidemis

    //singeltone
    static public function create() {
        return self::$cart ?? self::$cart = new self; // ?? --> jeigu Null tai sukurti nauja, antraip pasilieka reiksme
    }

    private function __construct() {
        $this->id = rand(1000, 9999);
    }

    // private function __clone() { }  // Neleidzia clonuoti objektu irasius funkcija kaip private

    private function __sleep() {     // Uzdrausti sleep
        return [];
    }

    private function __wakeup() { } // Uzdrausti wakeup
}