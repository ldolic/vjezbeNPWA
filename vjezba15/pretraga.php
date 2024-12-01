<?php
$con = mysqli_connect("localhost", "root", "", "baza_vjezba15");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);

   
    $query = "SELECT name, lastname FROM users WHERE name LIKE '%$search%' OR lastname LIKE '%$search%'";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" . $row['name'] . " " . $row['lastname'] . "</p>";
        }
    } else {
        echo "No results found.";
    }
}

mysqli_close($con);
?>
