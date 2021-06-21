<?php
$costByCountry = require "c0.7.02.countries.php";
$countries = array_keys($costByCountry);
?>
<!doctype html>
<html>
<head>
    <title>Biurex Podróżex</title>
    <meta charset="UTF-8">
</head>
    <h1>Formularz Biura Podróży</h1>

<body lang="en">
<form action="c07.02.function.php" method="post">
    <table>
            <p> Data rozpoczęcia
                <input type="date" name="początek" required>
            </p>
            <p>Data zakończenia
                <input type="date" name="koniec" required>
            </p>
            <tr> Liczba Osób
                <input type="number" name="osoby" required placeholder= "Od 1 do 30" min="1" max="30">
            </tr>
            <p> Kraje
                <?php foreach ($countries as $country): ?>
                <br>
                <label>
                    <input type="radio" name="country" value="<?= $country?>" required> <?= $country?>
                </label>
                <?php endforeach; ?>
            </p>
            <p>
                <label>
                    <input type="submit">
                </label>
            </p>
    </table>
</form>
</body>
</html>