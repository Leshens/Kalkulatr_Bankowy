<?php
if (
    array_key_exists('username', $_POST)
    && array_key_exists('pass', $_POST)
) {
    if ($_POST['username'] == "test" && $_POST['pass'] == "opos") {
        $secretMessage = "Secret Message!";
    } else {
        $errorMessage = "Incorrect username and/or password!";
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
<?php if (isset($secretMessage)): ?>
    <p><?php echo $secretMessage ?></p>
    <p><a href="cw06.php">Back</a></p>
<?php else: ?>
    <form action="cw06.php" method="post">
        <?php if (isset($errorMessage)): ?>
            <p style="color:red"><?php echo $errorMessage ?></p>
        <?php endif; ?>
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass">
        </p>
        <p>
            <input type="submit" value="Sign In">
        </p>
    </form>
<?php endif; ?>
</body>
</html>