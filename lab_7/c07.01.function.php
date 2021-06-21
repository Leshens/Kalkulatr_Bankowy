<?php
echo "Wybrałeś ".$_POST["choice"]." z liczbami ".$_POST["liczba1"]." i ".$_POST["liczba2"];
$wynik=0;
switch ($_POST["choice"]){
    case"Dodawanie":
        $wynik = $_POST["liczba1"]+$_POST["liczba2"];
}
echo "<br> Wynik to: ".$wynik;