<?php

error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', 'error.txt');

require "connect.php";

$sql = "SELECT weergave FROM website_weergave";
$result = $conn->query($sql);

if (!$result) {
    die("Queryfout: " . $conn->errorInfo()[2]);
}

$row = $result->fetch(PDO::FETCH_ASSOC);
$weergave = $row["weergave"];

$updateSql = "UPDATE website_weergave SET weergave = $weergave + 1";
$updateResult = $conn->query($updateSql);
if ($updateResult === FALSE) {
    die("Error updating weergave: " . $conn->errorInfo()[2]);
}
?>