<?php


if (!file_exists(__DIR__.'/data/saskaitos.json')) {
    file_put_contents(__DIR__.'/data/saskaitos.json', json_encode([]));     // jeigu nera failo - sukurti
}
// nuskaityti faila i massyva (true) -> decodinti -> priskirti naujam kintamui
$klientas = json_decode(file_get_contents(__DIR__.'/data/saskaitos.json'), true); 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    function arAKVienodas($k, $p) {     // Tikrina ar jau yra toks asmens kodas 
        foreach ($k as $value) {
            if ($value['askodas'] == $p) {  
                $p = 1;
                break;
            }
        } 
        return $p == 1 ? true : false;    
    }

    if (!arAKVienodas($klientas, $_POST['askodas'])) { //paduoda i funkcija klienta ir kuriama askoda
        $klientas[uniqid()] = $_POST;  // Priskiria unikalu ID naujam klientui ir ji sukuria
        file_put_contents(__DIR__.'/data/saskaitos.json', json_encode($klientas)); // ideti papildytus duomenis i faila
        echo 'NAUJAS KLIENTAS SUKURTAS!';
        header('Location: http://localhost/vienaragiai/Bankas/sukurimas.php?msg=1');
        die;
    } 
    else { 
        echo 'TOKIU ASMENS KODU JAU YRA UZREGISTRUOTAS KLIENTAS';
        header('Location: http://localhost/vienaragiai/Bankas/sukurimas.php?msg=2');
        die;
    }      
}
require __DIR__ .'./header.php'; 
?>
    <div class="addclient-column">
        <form action="" method="post" class="addclient" >
            <div class="addclient-row">
                <label class="label">Vardas</label>
                <input type="text" name="vardas" class="input" placeholder="Vardas"  required>
            </div>
            <div class="addclient-row">
                <label class="label">Pavardė</label>
                <input type="text" name="pavarde" class="input" placeholder="Pavardė"  required>
            </div>
            <div class="addclient-row">
                <label class="label">Sąskaitos numeris</label>
                <input type="text" name="saskaita" class="input" placeholder="Sąskaitos numeris"  required>
            </div>
            <div class="addclient-row">
                <label class="label">Asmens kodas</label>
                <input type="text" name="askodas" class="input" placeholder="Asmens kodas"  required>
            </div>
            <div>
                <input type="hidden" name="lesos" value="0">
            </div>
            <div class="addclient-row">
                <button type="submit" class="addclient-btn">SUKURTI</button>
            </div>
            <div>
                <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 1) echo 'Naujas klientas sukurtas!';
                        if ($_GET['msg'] == 2) echo 'Toks asmens kodas jau egzistuoja';
                    }
                ?>
            </div> 
        </form>
    <div> 
</body>
</html>