<?php

class Tenisininkas {
    private $vardas;
    private $kamuoliukas;
    private static $zaidejas1;
    private static $zaidejas2;
    
    public function zaidimoPradzia() {
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            echo '<h2>Zaidejai nesusirinko!</h2>';
        }
        self::$zaidejas1->kamuoliukas = (bool) rand(0,1);
        self::$zaidejas2 = !self::$zaidejas1->kamuoliukas;

    }

    public function __construct($name) {
        $this->vardas = $name;
        if (self::$zaidejas1 === null) {
            self::$zaidejas1 = $this;
        }
        elseif (self::$zaidejas2 === null) {
            self::$zaidejas2 = $this;
        }
    }

    public function arTuriKamuoliuka() {
        return $this->kamuoliukas;
    }

    public function perduotiKamuoliuka() {
        if (!$this->arTuriKamuoliuka()) {
            echo $this->name . ' neturi kamuoliuko.';
        }
        else {
            if (self::$zaidejas1->arTuriKamuoliuka()) {
                self::$zaidejas2->kamuoliukas = true;
                $this->kamuoliukas = false;
                echo 'Perduotas kamuoliuas';
            }
            else {
                self::$zaidejas1->kamuoliukas = true;
                $this->kamuoliukas = false;
                echo 'Perduotas kamuoliuas';
            }
        }

    }

    
}