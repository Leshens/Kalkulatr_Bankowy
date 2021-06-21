<?php
$dishes = [];
$extras= [];
require "menu.php";
require "functions.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($dishes[$_POST["dish"]])){
        echo $dishes[$_POST["dish"]];
    }
}

?>
<!doctype html>
<html lang="pl">
    <head>
        <title>Menu 1.0</title>
    </head>
    <body>
        <h1>Menu</h1>
            <form action="index.php" method="post">
                <label> Danie Główne
                    <select name="dish" required>
                        <option value="a" name="Pizza">Pizza</option>
                        <?php
                        foreach ($dishes as $dish){
                            echo "<option value=".$dish.">".$dish."</option>";
                        }
                        ?>
                        <option value="b" name="Zapiekanka">Zapiekanka</option>
                        <option value="c" name="Tortilla">Tortilla</option>
                    </select>
                </label>
                <label>Dodatki
                    <select name="extra">
                        <option value="d" name="Frytki">Frytki</option>
                        <option value="e" name="Cola">Cola</option>
                    </select>
                </label>
                <input type="submit">
            </form>
    </body>
</html>
