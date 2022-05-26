<?php

$cats = ['Pilkis', 'Murkis'];

if (!file_exists(__DIR__.'/cats.json')) {
    file_put_contents(__DIR__.'/cats.json', json_encode([]));     // jeigu nera failo - sukurti
}

file_put_contents(__DIR__.'/cats.json', json_encode($cats));      // ideti duomenis i faila

$nowCats = json_decode(file_get_contents(__DIR__.'/cats.json'));  // nuskaityti faila -> decodinti -> priskirti naujam kintamui

$nowCats[] = 'Micius';  // nujas arejau narys

file_put_contents(__DIR__.'/cats.json', json_encode($nowCats));   // uzkoduoti nauja kintama ir ideti i faila

//Nekurti ID su index. JSON faile tureti atskira kintamji kuris nurodo paskutino ID sukurima (kad nesikartotu)

