<?php
namespace Meska\Lokys;  // namespace visiskai priristas prie failo
use Old\Super\Senelis;

class Tevas extends Senelis {

    public function __construct() {
        parent::__construct();
        echo '<h3>Tevo Konstruktorius</h3>';
    }

    public function tvarka() {
        echo '<h3>Visiskas sutvarkyta</h3>';
    }
}