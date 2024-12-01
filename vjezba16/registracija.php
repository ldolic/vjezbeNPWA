<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 16</title>
</head>
<body>
    <h2>Registracija korisnika</h2>
    <form action="registracija.php" method="post">
        <label for="ime">Ime:</label>
        <input type="text" id="ime" name="ime" required><br><br>

        <label for="prezime">Prezime:</label>
        <input type="text" id="prezime" name="prezime" required><br><br>

        <label for="korisnicko_ime">Korisničko ime:</label>
        <input type="text" id="korisnicko_ime" name="korisnicko_ime" required><br><br>

        <label for="lozinka">Lozinka:</label>
        <input type="password" id="lozinka" name="lozinka" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefon">Telefon:</label>
        <input type="text" id="telefon" name="telefon"><br><br>

        <input type="submit" value="Registriraj se">
    </form>
</body>
</html>
<?php

$con = mysqli_connect("localhost", "root", "", "baza_vjezba15");


if (!$con) {
    die("Povezivanje s bazom nije uspjelo: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = mysqli_real_escape_string($con, $_POST['ime']);
    $prezime = mysqli_real_escape_string($con, $_POST['prezime']);
    $korisnicko_ime = mysqli_real_escape_string($con, $_POST['korisnicko_ime']);
    $lozinka = mysqli_real_escape_string($con, $_POST['lozinka']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $telefon = mysqli_real_escape_string($con, $_POST['telefon']);


    $lozinka1 = hash('sha256', $lozinka);


    $query = "INSERT INTO korisnici (ime, prezime, korisnicko_ime, lozinka, email, telefon) 
              VALUES ('$ime', '$prezime', '$korisnicko_ime', '$lozinka1', '$email', '$telefon')";


    if (mysqli_query($con, $query)) {
        echo "Korisnik je uspješno registriran!";
    } else {
        echo "Greška: " . mysqli_error($con);
    }
}


mysqli_close($con);
?>
