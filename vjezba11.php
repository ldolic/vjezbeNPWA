<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 11</title>
</head>
<body>
    <h1>Provjera je li broj prost i ispis svih prostih brojeva manjih od 100</h1>
    

    <form method="post">
       <p>Unesite broj:
        <input type="broj" id="broj" name="broj" required><br><br>
        <button type="submit">Provjeri</button></p>
    </form>

    <?php

    function jeProst($broj) {
      
        if ($broj <= 1) {
            return false;
        }
        
        
        for ($i = 2; $i <= sqrt($broj); $i++) {
            if ($broj % $i == 0) {
                return false; 
            }
        }
        
        return true; 
    }

 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $broj = $_POST["broj"];


        if (jeProst($broj)) {
            echo "<p>Broj $broj je prost!</p>";
        } else {
            echo "<p>Broj $broj nije prost.</p>";
        }
    }

 
    echo "<h2>Prosti brojevi manji od 100:</h2>";
    for ($i = 2; $i < 100; $i++) {
        if (jeProst($i)) {
            echo $i . "<br>"; 
        }
    }
    ?>
</body>
</html>
