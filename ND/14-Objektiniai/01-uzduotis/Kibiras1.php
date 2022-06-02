<?php
class Kibiras1
{
    public $akmenys = 0;
    protected $akmenuKiekis = 0;

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
