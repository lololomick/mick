<?php
require "connect.php"; // Inclusief het connect.php-bestand

// Uitvoeren van een query om gegevens op te halen
$sql = "SELECT bezoek_aantal FROM mick";
$result = $conn->query($sql);

// Controleren op fouten in de query
if (!$result) {
    die("Queryfout: " . $conn->errorInfo()[2]);
}

// Gegevens ophalen met PDO
$row = $result->fetch(PDO::FETCH_ASSOC);
$bezoek_aantal = $row["bezoek_aantal"];


// Update het bezoek_aantal in de database
$updateSql = "UPDATE mick SET bezoek_aantal = $bezoek_aantal + 1";
if ($conn->query($updateSql) === TRUE) {
    echo "Bezoek Aantal: " . $bezoek_aantal;
}
?>