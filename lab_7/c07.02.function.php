<?php
if ($_SERVER["REQUEST_METHOD"] != "POST"){
    echo "Przejdz na stronę: <a href='c07.02.php'>Formularz</a>";
}else {
    if (!empty($_POST["początek"]) && !empty($_POST["koniec"]) && !empty($_POST["osoby"])) {
        echo "Nie wypełniono wszystkich wartości: <a href='c07.02.php'>Formularz</a>";
    }else{
        $startDate = strftime($_POST["początek"]);
        $endDate = strftime($_POST["koniec"]);
        if ($startDate === false || $endDate === false){
            echo "Daty są nieprawidłowe: <a href='c07.02.php'>Formularz</a>";
        }else{
            $diff = floor(($endDate-$startDate)/(60*60*24)+1);
            echo "Koszt pobytu to: ". ($_POST["osoby"]*$diff*$costByCountry[$_POST["country"]]);
        }
    }

}
$costByCountry = require "c0.7.02.countries.php";