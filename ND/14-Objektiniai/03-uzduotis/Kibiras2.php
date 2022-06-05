<?php
class Kibiras2
{
    protected $akmenuKiekis = 0;
    static private $akmenuKiekisVisuoseKibiruose = 0;

    public function showAkmenys() {
        echo 'Akmenu skaicius: ' . $this->akmenuKiekisVisuoseKibiruose;
    }

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu(int $kiekis)
    {
        $this->akmenuKiekis += $kiekis; 
    }

    public function kiekPririnktaAkmenu()
    {
    }
    
}
