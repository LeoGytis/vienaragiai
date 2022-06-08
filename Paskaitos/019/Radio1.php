<?php

class Radio1 extends Radio2 implements Planas, PapildomasPlanas {
    
    public function goForIt(array $data) : array {
        echo 'Planas<br>';
        echo self::TU;
        return [];
    }

    function jaJa(int $data) : void {
    }

}