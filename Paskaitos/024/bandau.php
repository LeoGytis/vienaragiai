<?php
$ch = curl_init();  // curle handle objektas
$req_url = 'https://api.exchangerate.host/latest';
curl_setopt($ch, CURLOPT_URL, $req_url);      // option -->> kur kreipiames
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // option -->> noriu atsakymo sulaukt

$data = curl_exec($ch); // siuncia, laukiam, gaunam

if (!file_exists(__DIR__ . '/data/rates.json')) {
        file_put_contents(__DIR__ . '/data/rates.json', $data);
}

file_put_contents(__DIR__ . '/data/rates.json', $data);


curl_close($ch);


$rates = json_decode(file_get_contents(__DIR__ . '/data/rates.json'));

print_r($rates->rates->DZD);
