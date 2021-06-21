<?php
var_dump($_POST);
$a=array("login","password");
$b=array($a);
if (isset($_POST["login"])&&isset($_POST["password"])){
    foreach ($b as $row){
        if ($_POST["login"]==$row&&$_POST["password"]==$row){

        }
    }
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
<form method="post" action="index.php">
    <p> Login
        <input type="text" name="login" required>
    </p>
    <p>Password
        <input type="password" name="password" required>
    </p>
    <p>Submit
        <input type="submit" name="submit">
    </p>
</form>
</body>
</html>
