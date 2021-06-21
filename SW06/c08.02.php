<?php

$counter=file_get_contents('count.txt');
$counter++;
file_put_contents('count.txt', $counter);
echo "Jesteś "+$counter+" osobą na stronie!";

?>
<!doctype html>
<html lang="en">
<head>
    <title>Very Secret Page</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Very Secret Page</h1>

</body>
</html>
