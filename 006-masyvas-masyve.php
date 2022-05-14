<?php
echo '<pre>';
$animals = [
    ['name' => 'Pilkis', 'type' => 'cat'],
    ['name' => 'Šarikas', 'type' => 'dog'],
    ['name' => 'Bobikas', 'type' => 'dog'],
    ['name' => 'Juodis', 'type' => 'cat'],
    ['name' => 'Pūkis', 'type' => 'dog']
];


foreach($animals as $animal) {
    
    if('cat' == $animal['type']) {
        echo '<br>';
        print_r($animal['name']);
    }
    
}

// foreach($animals as &$animal) {

//     if ('Pūkis' == $animal['name']) {
//         $animal['type'] = 'cat';
//     }

// }

foreach($animals as $key => $animal) {

    if ('Pūkis' == $animal['name']) {
        $animals[$key]['type'] = 'cat';
    }

}




$_6X6 = [];

for ($k = 0; $k < 6; $k++) {
    
    $row = [];
    for ($i = 0; $i < 6; $i++) {
        $row[] = rand(6, 36);
    }

    $_6X6[] = $row;

}

echo '<br>';echo '<br>';

foreach($_6X6 as $row) {

    foreach($row as $number) {
        echo " $number ";
    }
    
    echo '<br>';
}



// print_r($_6X6);