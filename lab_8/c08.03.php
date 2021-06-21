<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$counter=file_get_contents('count.txt');
if (!array_key_exists("licznik",$_COOKIE)){
    setcookie('licznik',1);
    $counter++;
    file_put_contents('count.txt', $counter);
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Very Secret Page</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Very Secret Page</h1>
    <p>
     Jesteś <?php echo $counter;?> osobą na stronie!
     </p>
</body>
</html>
