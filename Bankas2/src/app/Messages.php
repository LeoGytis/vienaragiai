<?php

namespace Bankas2;

class Messages
{

    private static $bag;    // maisas kuriame laikome msg

    public static function init(): void
    {
        self::$bag = $_SESSION['msg'] ?? [];  // jei nieko nera grazina tuscia masyva
        unset($_SESSION['msg']);              // kai turime maise - tada istrinam
    }

    public static function add(string $text, string $type): void  //void - reikalauja kad funkcija nieko negrazintu
    {
        $_SESSION['msg'][] = ['msg' => $text, 'type' => $type];   // type - zinutes tipas
    }

    public static function get(): array
    {
        return self::$bag;
    }
}
