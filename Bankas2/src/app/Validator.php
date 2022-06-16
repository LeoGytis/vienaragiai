<?php

namespace Bankas2;

class Validator
{
    private $data, $file;

    public function __construct($file)
    {
        $this->file = $file;
        $this->data = json_decode(file_get_contents(__DIR__ . '/../data/' . $file . '.json'), true);
    }

    public function socialIDcheck(int $id)
    {
        foreach ($this->data as $data) {
            if ($data['social_id'] == $id) {
                return true;
                break;
            }
        }
    }

    public function nameLengthCheck($name, $surname)
    {
        if (strlen($name) <= 3 || strlen($surname) <= 3) {
            return true;
        } else return false;
        // strlen($name) <= 3 ? true : (strlen($surname) <= 3) ? true : false;   // kaip parasyti ternanry???
    }

    public function socialIDvalidation(int $id)
    {
        if ((int)substr($id, 0, 1) != 3 && (int)substr($id, 0, 1) != 4 || (int)substr($id, 3, 2) > 12 || (int)substr($id, 5, 2) > 31 || (int)strlen($id) != 11) {
            return true;
        } else return false;
    }
}
