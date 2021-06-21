<?php
if(isset($_POST['kolor']) && isset($_POST['marka'])&& isset($_POST['rejestracja'])){
    $dbConnection = mysqli_connect("localhost", "root", "","cars");
    $kolor = $_POST['kolor'];
    $marka = $_POST['marka'];
    $rejestracja = $_POST['rejestracja'];
    $query ="INSERT INTO cars (kolor,marka,rejestracja) VALUES(?,?,?)";
    $stmt = mysqli_prepare($dbConnection,$query);
    mysqli_stmt_bind_param($stmt,"sss",$kolor,$marka,$rejestracja);
    if(!$result = mysqli_stmt_execute($stmt)){
        echo mysqli_error($dbConnection);
    } else {
        header("Location: /index.php");
    }
    mysqli_close($dbConnection);
    exit();
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf8">
    <title>Samochody</title>
</head>
<body>
<form action="adder.php" method="post">
    <table>
        <input type="text" name="kolor" placeholder="kolor" required>
        <input type="text" name="marka" placeholder="marka" required>
        <input type="text" name="rejestracja" placeholder="rejestracja" required>
        <button type="submit"> Dodaj samochód</button>
    </table>
</form>
<a href="index.php">Powroc do bazy</a>
</body>
</html>