<?php
namespace Old\Super;

class Senelis {

    public function __construct() {
        echo '<h3>Senelio Konstruktorius</h3>';
    }

    public static $posakis = 'VA Va, Sakiau Tau';

    public function pasaka() {
        echo '<h3>Seku seku pasaka apie Meskena</h3>';
        echo '<h3>'.self::$posakis.'</h3>';
        echo '<h3>'.static::$posakis.'</h3>';   // Vaikas ismokina seneli -> extendinus matosi galutinis rezultatas
    }



}