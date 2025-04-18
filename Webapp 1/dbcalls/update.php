<?php

include("conn.php");

$productnaam = $_POST['productnaam'];
$beschrijving = $_POST['beschrijving'];
$prijs = $_POST['prijs'];
$id = $_POST['id'];

var_dump($_POST);

$sql = 'UPDATE menuitems SET ProductNaam = :productnaam, Beschrijving = :beschrijving, Prijs = :prijs WHERE ID = :id';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id );
$stmt->bindParam(":productnaam", $productnaam );
$stmt->bindParam(":beschrijving", $beschrijving );
$stmt->bindParam(":prijs", $prijs );
$stmt->execute();


header("location: ../admin.php");   