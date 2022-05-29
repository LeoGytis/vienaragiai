<?php
    require __DIR__ .'./header.php'; 

if (!file_exists(__DIR__.'/saskaitos.json')) {
    file_put_contents(__DIR__.'/saskaitos.json', json_encode([]));     // jeigu nera failo - sukurti
}

$klientasDabar = json_decode(file_get_contents(__DIR__.'/saskaitos.json'));  // nuskaityti faila -> decodinti -> priskirti naujam kintamui

echo '<pre>';
print_r($klientasDabar);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $naujas = $_POST;
    // $klientasDabar[] =  $_POST;
    // array_push($klientasDabar, $_POST);

   foreach ($naujas as $key => $value) {
       $klientasDabar[] = $value;
   }

    file_put_contents(__DIR__.'/saskaitos.json', json_encode($klientasDabar)); // ideti papildytus duomenis i faila
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form.css">
    <title>Sąskaitos sukūrimas</title>
</head>
<body>
    <div class="form-column">
        <form action="" method="post" class="form" >
            <div class="form-row">
                <label class="label">Vardas</label>
                <input type="text" name="vardas" class="input" placeholder="Vardas"  required>
            </div>
            <div class="form-row">
                <label class="label">Pavardė</label>
                <input type="text" name="pavarde" class="input" placeholder="Pavardė"  required>
            </div>
            <div class="form-row">
                <label class="label">Sąskaitos numeris</label>
                <input type="text" name="saskaita" class="input" placeholder="Sąskaitos numeris"  required>
            </div>
            <div class="form-row">
                <label class="label">Asmens kodas</label>
                <input type="text" name="askodas" class="input" placeholder="Asmens kodas"  required>
            </div>
            <div>
                <input type="hidden" name="lesos" value="0">
            </div>
            <div class="form-row">
                <button type="submit" class="btn">SUKURTI</button>
            </div> 
        </form>
    <div> 
</body>
</html>