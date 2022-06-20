<?php

namespace Bankas2;

use Bankas2\Messages as M;

class Services
{
    public static function getCurrencyRate(string $currency)
    {
        $ch = curl_init();  // curle handle objektas
        $req_url = 'https://api.exchangerate.host/latest';
        curl_setopt($ch, CURLOPT_URL, $req_url);      // option -->> kur kreipiames
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // option -->> noriu atsakymo sulaukt

        $data = curl_exec($ch); // siuncia, laukiam, gaunam

        if (!file_exists(__DIR__ . '/../data/rates.json')) {
            file_put_contents(__DIR__ . '/../data/rates.json', $data);
        }
        file_put_contents(__DIR__ . '/../data/rates.json', $data);

        curl_close($ch);

        $rates = json_decode(file_get_contents(__DIR__ . '/../data/rates.json'));

        M::add('valiuta pakeista', 'success');

        // return App::view('showuser', ['title' => 'Kliento puslapis', 'messages' => M::get(), 'data' => $user]);
        // return App::view('showuser', ['title' => 'Kliento puslapis', 'messages' => $rates->rates->$currency]);
        return $rates->rates->$currency;
    }

    public static function exchangeCurrency()
    {
    }
}
