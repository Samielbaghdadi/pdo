<?php	
if (isset($_POST['verzenden'])) {
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $leeftijd = $_POST['leeftijd'];
    $adres = $_POST['adres'];
    $email = $_POST['email'];
    echo $naam;
    echo "<br>";
    echo $achternaam;
    echo "<br>";
    echo $leeftijd;
    echo "<br>";
    echo $adres;
    echo "<br>";
    echo $email;
    echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<input type="text"  name="naam" placeholder="naam" required>
<input type="text"  name="achternaam" placeholder="achternaam" required>
<input type="number" name="leeftijd" placeholder="leeftijd" required>
<input type="text"  name="adres" placeholder="adres" required>
<input type="email" name="email" placeholder="email" required>
<input type=submit name="verzenden">
</form>
</body>
</html>
