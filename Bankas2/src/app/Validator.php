<?php

namespace Bankas2;

class Validator
{
    private $data, $file;

    public function __construct($file)
    {
        $this->file = $file;
        $this->data = json_decode(file_get_contents(__DIR__ . '/../data/' . $file . '.json'), true);
        // print_r($this->data);
    }

    public function isSoicalIdSame($id)
    {
        foreach ($this->data as $data) {
            if ($data['social_id'] == $id) {
                return true;
                break;
            }
        }
    }


    // $clients = json_decode(file_get_contents(__DIR__.'/data/saskaitos.json'), true); 
    // $unikalusId = json_decode(file_get_contents(__DIR__.'/data/uniqueID.json'), true); 

    // if($_SERVER['REQUEST_METHOD'] === 'POST') {

    //     function arAKVienodas($k, $p) {     // Tikrina ar jau yra toks asmens kodas 
    //         foreach ($k as $value) {
    //             if ($value['askodas'] == $p) {  
    //                 $p = 1;
    //                 break;
    //             }
    //         } 
    //         return $p == 1 ? true : false;    
    //     }


    //     if (!arAKVienodas($clients, $_POST['askodas'])) { //paduoda funkcijai klienta ir kuriama askoda
    //         if (strlen($_POST['vardas']) > 3 && strlen($_POST['pavarde']) > 3) {
    //             if ((int)substr($_POST['askodas'], 3, 2) <= 12 && (int)substr($_POST['askodas'], 5, 2) <= 31 && strval(strlen($_POST['askodas'])) == 11) {  // Tikrina asmens koda
    //                 $clients[$unikalusId] = $_POST;  // Priskiria unikalu ID naujam klientui ir ji sukuria
    //                 $unikalusId++;
    //                 file_put_contents(__DIR__.'/data/saskaitos.json', json_encode($clients)); // ideti papildytus duomenis i faila
    //                 file_put_contents(__DIR__.'/data/uniqueID.json', json_encode($unikalusId)); 
    //                 header('Location: http://localhost/vienaragiai/Bankas/addclient.php?msg=1');
    //                 die;   
    //             }
    //             else {
    //                 header('Location: http://localhost/vienaragiai/Bankas/addclient.php?msg=4');
    //                 die;
    //             } 
    //         } else {
    //             header('Location: http://localhost/vienaragiai/Bankas/addclient.php?msg=3');
    //             die; 
    //         }
    //     } 
    //     else { 
    //         echo 'TOKIU ASMENS KODU JAU YRA UZREGISTRUOTAS KLIENTAS';
    //         header('Location: http://localhost/vienaragiai/Bankas/addclient.php?msg=2');
    //         die;
    //     }      
    // }
}
