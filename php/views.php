<?php
session_start();
require "connect.php";

$sql = "SELECT bezoek_aantal FROM mick"; 

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        echo $row["bezoek_aantal"] . "Views";
    }
} else {
    echo "Er is een fout opgetreden bij het uitvoeren van de query: " . $conn->errorInfo()[2];
}
PDO::close()
?>