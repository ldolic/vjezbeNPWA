<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 6</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <form method="post">
        <label for="num1">Prvi broj:</label>
        <input type="number" name="num1" id="num1" step="any" required>
        <br>
        
        <br>
        <label for="num2">Drugi broj:</label>
        <input type="number" name="num2" id="num2" step="any" required>
        <br>
		
		<label for="operation">Odaberite operaciju:</label>
        <select name="operation" id="operation" required>
            <option value="zbrajanje">Zbrajanje (+)</option>
            <option value="oduzimanje">Oduzimanje (-)</option>
            <option value="mnozenje">Množenje (×)</option>
            <option value="djeljenje">Dijeljenje (÷)</option>
        </select>
        <button type="submit">Izračunaj</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "zbrajanje":
                $result = $num1 + $num2;
                echo "<p>Rezultat zbrajanja: $num1 + $num2 = <strong>$result</strong></p>";
                break;
            case "oduzimanje":
                $result = $num1 - $num2;
                echo "<p>Rezultat oduzimanja: $num1 - $num2 = <strong>$result</strong></p>";
                break;
            case "mnozenje":
                $result = $num1 * $num2;
                echo "<p>Rezultat množenja: $num1 × $num2 = <strong>$result</strong></p>";
                break;
            case "djeljenje":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<p>Rezultat dijeljenja: $num1 ÷ $num2 = <strong>$result</strong></p>";
                } else {
                    echo "<p><strong>Greška:</strong> Dijeljenje s nulom nije moguće.</p>";
                }
                break;
            default:
                echo "<p><strong>Greška:</strong> Nevažeća operacija.</p>";
        }
    }
    ?>
</body>
</html>
