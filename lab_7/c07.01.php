<!doctype html>
<html>
<head>
    <title>Kalkulator</title>
    <meta charset="UTF-8">
</head>
    <h1>Nie Prosty Kalkulator</h1>
<body lang="en">
<form action="c07.01.function.php" method="post">
    <table>
        <tr>
            <p>
                <input type="number" name="liczba1" required step="any">
            </p>
            <p>
                <input type="number" name="liczba2" required step="any">
            </p>
        </tr>
        <tr>
            <label>
                   <input type="radio" name="choice" value="Dodawanie"> Dodawanie
            </label>
        </tr>
        <tr>
            <label>
                <input type="radio" name="choice" value="Odejmowanie"> Odejmowanie
            </label>
        </tr>
        <tr>
            <label>
                <input type="radio" name="choice" value="Mnożenie"> Mnożenie
            </label>
        </tr>
        <tr>
            <label>
                <input type="radio" name="choice" value="Dzielenie"> Dzielenie
            </label>
        </tr>
        <p>
        <tr>
            <label>
                <input type="submit">
            </label>
        </tr>
        </p>
    </table>
</form>
</body>
</html>
