<?php

class Pinigine
{
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function showMoney()
    {
        echo 'Popieriniai pinigai: ' . $this->popieriniaiPinigai;
        echo '<br>--------<br>';
        echo 'Metaliniai pinigai: ' . number_format((float)$this->metaliniaiPinigai, 2, '.', '');
    }

    public function idet($kiekis)
    {
        if ($kiekis < 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else $this->popieriniaiPinigai += $kiekis;
    }

    public function skaiciuoti()
    {
        echo '<br>--------<br>';
        echo 'Pinigu suma: ' . ($this->popieriniaiPinigai + $this->metaliniaiPinigai);
    }
}
