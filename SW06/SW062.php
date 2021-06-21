<?php
var_dump($_POST);
if(
        array_key_exists("Liczba",$_POST) && is_array("Liczba") &&count($_POST["Liczba"]) == 6
) {
    $errorMessage = false;
    $liczby = array_values($_POST["Liczba"]);
    sort($liczby);
    foreach ($liczby as $i => $liczby){
        if ($i ==5){
            continue;
        }
        if ($liczby == $liczby[$i+1]){
            $errorMessage="Liczby się powtarzają";
            break;
        }
    }
    if ($errorMessage == false) {
        $numbers = range(1,40);
        $taken= [];
        foreach (range(0,5)as $i) {
            $randIndex = array_rand(
              array_keys($numbers)
            );
            $taken[] = $numbers[$randIndex];
            unset($numbers[$randIndex]);
            }
        $same = array_intersect($numbers,$taken);
        var_dump($same);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Loteria</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Loteria</h1>

    <form action="SW062.php" method="post">

        <p>
            <label for="liczba1">Liczba1</label>
            <input type="number" name="Liczba[1]" id="Liczba0" required min="1" max="40">
        </p>
        <p>
            <label for="liczba2">Liczba2</label>
            <input type="number" name="Liczba[2]" id="Liczba1" required min="1" max="40">
        </p>
        <p>
            <label for="liczba3">Liczba3</label>
            <input type="number" name="Liczba[3]" id="Liczba2" required min="1" max="40">
        </p>
        <p>
            <label for="liczba4">Liczba4</label>
            <input type="number" name="Liczba[4]" id="Liczba3" required min="1" max=40">
        </p>
        <p>
            <label for="liczba5">Liczba5</label>
            <input type="number" name="Liczba[5]" id="Liczba4" required min="1" max="40">
        </p>
        <p>
            <label for="liczba6">Liczba6</label>
            <input type="number" name="Liczba[6]" id="Liczba5" required min="1" max="40">
        </p>
        <p>
            <input type="submit" value="Wyślij">
        </p>
    </form>
</body>
</html>
