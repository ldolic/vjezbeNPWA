<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 7</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Izračun konačne ocjene</h1>
        <form method="post">
            <label for="ocjena1">Unesite ocjenu I. kolokvija (1-5):</label>
            <input type="number" id="ocjena1" name="ocjena1" min="1" max="5" required>
            <br>
            <label for="ocjena2">Unesite ocjenu II. kolokvija (1-5):</label>
            <input type="number" id="ocjena2" name="ocjena2" min="1" max="5" required>
            <br>
            <button type="submit">Izračunaj</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ocjena1 = $_POST["ocjena1"];
            $ocjena2 = $_POST["ocjena2"];
            $prosjek = ($ocjena1 + $ocjena2) / 2;

            echo "<div class='result'>";
            if ($ocjena1 < 2 || $ocjena2 < 2) {
                echo "<p>Krajnja ocjena je <strong>negativna</strong>, jer je jedan od kolokvija ocijenjen negativno.</p>";
            } else {
                echo "<p>Prosjek ocjena: <strong>$prosjek</strong></p>";
                echo "<p>Konačna ocjena iz predmeta: <strong>" . round($prosjek) . "</strong></p>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
