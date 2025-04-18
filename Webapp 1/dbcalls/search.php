<?php
include("conn.php");

$searchResult = $_GET["searchresult"];

$product = '%' . $searchResult . '%';

$stmt = $conn->prepare("SELECT * FROM menuitems WHERE lower(Productnaam) LIKE lower(:product);");
$stmt->bindParam(":product", $product);
$stmt->execute();

$searchResult = $stmt->fetchAll();

session_start();
$_SESSION["searchResult"] = $searchResult;

header("location: ../index.php");