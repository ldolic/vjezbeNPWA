<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 8</title>
</head>
<body>
    <h1>Popis vozila</h1>

    <?php

    $cars = array("Audi", "BMW", "Renault", "Citroen");


    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["newCar"])) {
        $newCar = htmlspecialchars($_POST["newCar"]); 
        $cars[] = $newCar; 
    }


    echo "<h2>Trenutni popis vozila:</h2>";
    echo "<ul>";
    foreach ($cars as $car) {
        echo "<li>$car</li>";
    }
    echo "</ul>";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selectedCar"])) {
        $selectedCar = $_POST["selectedCar"];
        echo "<p><strong>Odabrano vozilo je: $selectedCar</strong></p>";
    }
    ?>

   
    <form method="post">
        <label for="newCar">Dodajte novo vozilo:</label>
        <input type="text" id="newCar" name="newCar" placeholder="Unesite naziv vozila">
        <br><br>

        <label for="selectedCar">Odaberite vozilo:</label>
        <select id="selectedCar" name="selectedCar">
            <?php
            foreach ($cars as $car) {
                echo "<option value=\"$car\">$car</option>";
            }
            ?>
        </select>
        <br><br>

        <button type="submit">Pošalji</button>
    </form>
</body>
</html>