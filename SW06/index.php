<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strona Kacper Kamm</title>
</head>
<body>
<header>
    <h1>Kacper Kamm - Strona Domowa</h1>
</header>

<section>
    <article>
        <header>
            <h2>
                O mnie
            </h2>
        </header>
        <p>
            Jestem uczniem PJATK
        </p>
        <p>
            Moje zainteresowania:
            <ul>
            <?php
            $read = file_get_contents("zainteresowania");
            $read = explode("\a",$read);
            foreach ($read as $row){
                echo $row . "</br>";
            }
            ?>
            </ul>
        </p>
        <p>
            Mam
            <?php
             $birthdate=("2000-05-22");
             require  "functions.php";
             howOld($birthdate);
            ?>
            lat
        </p>
    </article>
</section>
<footer>
    <p style="font-size:10px">
    &copy; by Kacper Kamm <?php
    echo date("Y")
    ?>
    </p>
</footer>
</body>
</html>