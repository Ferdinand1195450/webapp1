<h1>create</h1>
<?php
include("./conn.php");


$product = $_POST['gerechtnaam'];
$beschrijving = $_POST['beschrijving'];
$prijs = $_POST['prijs'];

$sql = 'INSERT INTO menuitems(ProductNaam, Beschrijving, Prijs) VALUES (:product, :beschrijving, :prijs);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->bindParam(":beschrijving", $beschrijving);
$stmt->bindParam(":prijs", $prijs);
$stmt->execute();


header('Location: ../admin.php');