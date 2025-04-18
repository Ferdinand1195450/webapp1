<?php

$stmt = $conn->prepare("SELECT ID, productnaam, beschrijving, prijs FROM menuitems;");
$stmt->execute();
$result = $stmt->fetchAll();