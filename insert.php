<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];

    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$product_naam, $prijs_per_stuk, $omschrijving])) {
        echo "Product succesvol toegevoegd!";
    } else {
        echo "Er is een fout opgetreden bij het toevoegen van het product.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Toevoegen</title>
</head>
<body>
    <h2>Voeg een nieuw product toe</h2>
    <form method="POST" action="">
        <label for="product_naam">Product Naam:</label>
        <input type="text" id="product_naam" name="product_naam" required><br><br>
        <label for="prijs_per_stuk">Prijs per Stuk:</label>
        <input type="number" id="prijs_per_stuk" name="prijs_per_stuk" step="0.01" required><br><br>
        <label for="omschrijving">Omschrijving:</label>
        <textarea id="omschrijving" name="omschrijving" required></textarea><br><br>
        <button type="submit">Product Toevoegen</button>
    </form>
</body>
</html>
