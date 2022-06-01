<?php
if (!file_exists(__DIR__.'/data/saskaitos.json')) {
    file_put_contents(__DIR__.'/data/saskaitos.json', json_encode([]));     // jeigu nera failo - sukurti
}
if (!file_exists(__DIR__.'/data/uniqueID.json')) {
    file_put_contents(__DIR__.'/data/uniqueID.json', json_encode(0));     // jeigu nera failo - sukurti
}
// nuskaityti faila i massyva (true) -> decodinti -> priskirti naujam kintamui
$clients = json_decode(file_get_contents(__DIR__.'/data/saskaitos.json'), true); 
$unikalusId = json_decode(file_get_contents(__DIR__.'/data/uniqueID.json'), true); 

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
    if (!arAKVienodas($clients, $_POST['askodas'])) { //paduoda funkcijai klienta ir kuriama askoda
        if (strlen($_POST['vardas']) > 3 && strlen($_POST['pavarde']) > 3) {
            if ((int)substr($_POST['askodas'], 3, 2) <= 12 && (int)substr($_POST['askodas'], 5, 2) <= 31) {
                // && (int)strlen($_POST['askodas'] == 11) NEPRAEINA
                $clients[$unikalusId] = $_POST;  // Priskiria unikalu ID naujam klientui ir ji sukuria
                $unikalusId++;
                file_put_contents(__DIR__.'/data/saskaitos.json', json_encode($clients)); // ideti papildytus duomenis i faila
                file_put_contents(__DIR__.'/data/uniqueID.json', json_encode($unikalusId)); 
                header('Location: http://localhost/vienaragiai/Bankas/addclient.php?msg=1');
                die;   
            }
            else {
                header('Location: http://localhost/vienaragiai/Bankas/addclient.php?msg=4');
                die;
            } 
        } else {
            header('Location: http://localhost/vienaragiai/Bankas/addclient.php?msg=3');
            die; 
        }
    } 
    else { 
        echo 'TOKIU ASMENS KODU JAU YRA UZREGISTRUOTAS KLIENTAS';
        header('Location: http://localhost/vienaragiai/Bankas/addclient.php?msg=2');
        die;
    }      
}

$iban = 'LT' . rand(40, 60) . '10100' . rand(10000000000, 99999999999);

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
                <input type="text" name="saskaita" class="input" placeholder="<?= $iban ?>"  value=<?= $iban ?> readonly>
            </div>
            <div class="addclient-row">
                <label class="label">Asmens kodas</label>
                <input type="text" name="askodas" class="input" placeholder="Asmens kodas"  required>
            </div>
            
            <div>
                <input type="hidden" name="lesos" value="0">
            </div>
            <div>
                <?php
                    if (isset($_GET['msg'])) {
                        if ($_GET['msg'] == 1) echo 'Naujas klientas sukurtas!';
                        if ($_GET['msg'] == 2) echo 'Toks asmens kodas jau egzistuoja.';
                        if ($_GET['msg'] == 3) echo 'Per trumpas vardas arba pavardė.';
                        if ($_GET['msg'] == 4) echo 'Toks asmens kodas negalimas.';
                    }
                ?>
            </div> 
            <div class="addclient-row">
                <button type="submit" class="addclient-btn">SUKURTI</button>
            </div>
        </form>
    <div> 
</body>
</html>