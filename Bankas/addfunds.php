<?php
    $klientai = json_decode(file_get_contents(__DIR__.'/data/saskaitos.json'), true);

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($klientai as $key => $arr) {
            if ($key == $_GET['id']) {                  // Tikrina ir suranda duoto puslapio ID
                $arr['lesos'] = strval(intval($arr['lesos']) + intval($_POST['suma']));   // Priskiriama nauja suma
                $klientai[$_GET['id']] = $arr; // Priskirti klientui su ID nauja arreju su nauja ivesta suma;
            }
        }
        file_put_contents(__DIR__.'/data/saskaitos.json', json_encode($klientai)); // ideti papildytus duomenis i faila
        header('Location: http://localhost/vienaragiai/Bankas/addfunds.php?id=' . $_GET['id'].'&msg=1');
        die;
    } 
    require __DIR__ .'./header.php';
?>
    <div class="funds-column">
        <?php
        if (isset($_GET['id'])) {
            echo '<div class="funds-client">';
            echo $klientai[$_GET['id']]['vardas'] . ' &nbsp;' . $klientai[$_GET['id']]['pavarde'] . '<br><br>';
            echo $klientai[$_GET['id']]['lesos'] . '€';
            echo '</div>';
        } else echo 'Prašome pasirinkti klientą iš sąskaitų sąrašo.';
        ?>
        <form action="" method="post" class="funds-form" > 
            <input type="text" name="suma" class="funds-input" required>   
            <button type="submit" class="funds-btn">Pridėti lėšų</button>
        </form>
            <?php
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 1) echo '<br>Sąskaita buvo papildyta.';
        }
        ?>
    </div>
</body>
</html>