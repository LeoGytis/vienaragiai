<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Sąskaitos sukūrimas</title>
</head>
<body>
    <div class="logo"><img src="./img/logo_img.png" alt="Horse Image"></div>
    <nav class="navigation">
        <a href="http://localhost/vienaragiai/Bankas/sarasas.php">Sąskaitų sąrašas</a>
        <a href="http://localhost/vienaragiai/Bankas/sukurimas.php">Sąskaitos sukūrimas</a>
        <a href="http://localhost/vienaragiai/Bankas/prideti.php">Pridėti lėšas</a>
        <a href="http://localhost/vienaragiai/Bankas/nuskaiciuoti.php">Nuskaičiuoti lėšas</a>
    </nav>

    <img class="horseimg" src="./img/horses2.jpg" alt="horses">
    <div class="form-column">
    <form class="form">
            <div class="form-row">
                <label class="label">Vardas</label>
                <input type="text" name="vardas" class="input" placeholder="Vardas"  required>
            </div>
            <div class="form-row">
                <label class="label">Pavardė</label>
                <input type="text" name="pavarde" class="input" placeholder="Pavarde"  required>
            </div>
            <div class="form-row">
                <label class="label">Sąskaitos numeris</label>
                <input type="text" name="saskaita" class="input" placeholder="Sąskaitos numeris"  required>
            </div>
            <div class="form-row">
                <label class="label">Asmens kodas</label>
                <input type="number" name="askodas" class="input" placeholder="Asmens kodas"  required>
            </div>
            <div class="form-row">
                <button type="submit" class="btn">Sukurti</button>
            </div> 
        </form>
    <div>   
        
</body>
</html>