<?php

use Bankas2\DB\DataBase;

class JsonDB implements DataBase
{
    private $data, $file;

    public function __construct($file)
    {
        $this->file = $file;
        if (!file_exists(__DIR__ . '/data/' . $file . '.json')) {
            file_put_contents(__DIR__ . '/data/' . $file . '.json', json_encode([]));
            file_put_contents(__DIR__ . '/data/' . $file . '_id.json', 0);
        }
        $this->data = json_decode(file_get_contents(__DIR__ . '/data/' . $file . '.json'), 1);
    }

    public function __destruct()
    {
        file_put_contents(__DIR__ . '/data/' . $this->file . '.json', json_encode($this->data));
    }
}
