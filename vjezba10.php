<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prebrojavanje riječi</title>
</head>
<body>
    <h1>Prebrojavanje riječi u rečenici</h1>
    

    <form method="post">
        <p>Unesite rečenicu:<br>
        <input id="rijec" name="rijec" type="text" required><br><br></p>
        <button type="submit">Prebroj riječi</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $rijec = $_POST["rijec"];
        

        $brojRijeci = str_word_count($rijec);
        
   
        echo "<h2>Broj riječi u rečenici:</h2>";
        echo "<p><strong>$brojRijeci</strong></p>";
    }
    ?>
</body>
</html>
