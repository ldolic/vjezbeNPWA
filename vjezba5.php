<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogodi broj</title>
</head>
<body>
    <h1>Pogodi broj između 1 i 10</h1>
    <form method="post">
        <label for="guess">Unesite broj (1-10):</label>
        <input type="number" name="guess" id="guess" min="1" max="9" required>
        <br>
        <button type="submit">Pogodi</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userGuess = $_POST["guess"];
        $randomNumber = rand(1, 9);

        echo "<p>Zamišljeni broj je: <strong>$randomNumber</strong></p>";

        if ($userGuess == $randomNumber) {
            echo "<p>Čestitamo! Pogodili ste broj.</p>";
        } else {
            echo "<p>Nažalost, niste pogodili. Pokušajte ponovno!</p>";
        }
    }
    ?>
</body>
</html>
