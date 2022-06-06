<?php
namespace Meska\Lokys;   // Pilnavertis klases vardas

class Vaikas extends Tevas {

    public static $posakis = 'bla bla';

    public function __construct() {
        // parent::__construct();
        echo '<h3>Vaiko Konstruktorius</h3>';
    }

    public function betvarke() {
        echo '<h3>Visiska betvarke</h3>';
    }

    // public function pasaka() {
    //     echo '<h3>skrolinu tik toka</h3>';
    // }

}

// Overloadas kai turim du vienodus konstruktorius arba du vienodus metodus, bet skiriasi ju argumentai.
// Tada overloadina ta konstruktoriu i kuri kreipiames su argumentu (pvz. kreipiames su integer arba kreipiames su arrejum)
// PHP negali buti overloado nes tuo paciu vardu negali but dvieju metodu.