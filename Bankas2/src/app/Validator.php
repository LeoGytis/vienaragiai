<?php

namespace Bankas2;

use Bankas2\Messages as M;


class Validator
{
    private $data;

    public function __construct($file)
    {
        $this->file = $file;
        $this->data = json_decode(file_get_contents(__DIR__ . '/../data/' . $file . '.json'), true);
    }

    private function socialIDcheck(int $id)
    {
        foreach ($this->data as $data) {
            if ($data['social_id'] == $id) {
                return true;
                break;
            }
        }
    }

    private function nameLengthCheck($name, $surname)
    {
        if (strlen($name) <= 3 || strlen($surname) <= 3) {
            return true;
        } else return false;
        // strlen($name) <= 3 ? true : (strlen($surname) <= 3) ? true : false;   // kaip parasyti ternanry???
    }

    private function socialIDvalidation(int $id)
    {
        if ((int)substr($id, 0, 1) != 3 && (int)substr($id, 0, 1) != 4 || (int)substr($id, 3, 2) > 12 || (int)substr($id, 5, 2) > 31 || (int)strlen($id) != 11) {
            return true;
        } else return false;
    }

    public function formValidation($post_data)
    {
        if (self::nameLengthCheck($post_data['name'], $post_data['surname'])) {
            M::add('Vardas ir pavardė turi turėti bent 4 simbolius.', 'alert');
            return true;
        }
        if (self::socialIDcheck($post_data['social_id'])) {
            M::add('Toks asmens kodas jau yra.', 'alert');
            return true;
        }
        if (self::socialIDvalidation($post_data['social_id'])) {
            M::add('Netinkamai įvestas asmens kodas', 'alert');
            return true;
        }
    }
}
