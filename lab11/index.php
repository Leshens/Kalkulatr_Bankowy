<?php
$dbConnection = mysqli_connect("localhost", "root", "","cars");
$columns = [
    'id' => 'id',
    'kolor'   => 'kolor',
    'marka'    => 'marka',
    'rejestracja'  => 'rejestracja'
];
$sql = "SELECT ".implode(',', array_keys($columns))." FROM `cars`";
if (isset($_GET['order_criterion']) && array_key_exists($_GET['order_criterion'], $columns)) {
    $sql .= " ORDER BY " . $_GET['order_criterion'];
}
$result = mysqli_query($dbConnection, $sql);
$cars   = [];
while($row = mysqli_fetch_row($result)) {
    $cars[] = $row;
}
mysqli_close($dbConnection);
?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf8">
    <title>Samochody</title>
</head>
<body>
<form action="index.php" method="get">
    <label>
        <select name="order_criterion">
            <?php foreach($columns as $columnName => $columnLabel): ?>                <option value="<?php echo $columnName ?>" <?php if($columnName == ($_GET['order_criterion'] ?? '')): ?>selected<?php endif; ?>><?php echo $columnLabel; ?></option>
            <?php endforeach; ?>        </select>
    </label>
    <button type="submit">Sortuj!</button>
</form>
<table>
    <thead>
    <tr>
        <?php foreach($columns as $columnLabel): ?>            <th><?php echo $columnLabel; ?></th>
        <?php endforeach; ?>    </tr>
    </thead>
    <tbody>
    <?php foreach($cars as $car): ?>        <tr>
        <?php foreach($car as $columnValue): ?>                <td><?php echo $columnValue; ?></td>
        <?php endforeach; ?>
    <td>
        <form action="remove.php" method="post">
            <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
            <button type="submit">Usuń</button>
        </form>
    </td>
    </tr>
    <?php endforeach; ?>    </tbody>
</table>
<a href="adder.php">Dodaj samochód</a>
</body>
</html>