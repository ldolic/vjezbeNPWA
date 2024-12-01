<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 4</title>
</head>
<body>
    <form method="post">
        <label for="a">Unesite vrijednost za a:</label>
        <input type="number" name="a" id="a" >
        <br>
        <label for="b">Unesite vrijednost za b:</label>
        <input type="number" name="b" id="b" >
        <br>
        <button type="submit">Izračunaj</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = (3 * $a - $b) / 2;

        echo "<p>Vrijednost varijable c izračunata prema formuli (3a - b) / 2 je: <strong>$c</strong></p>";
    }
    ?>
</body>
</html>
