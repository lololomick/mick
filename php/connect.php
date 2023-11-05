<?php
$db_server = 'rdbms.strato.de';
$db_user = 'dbu2929364';
$db_password = 'lololomickS06';
$db_name = 'dbs12010829';

try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Verbindingsfout: ' . $e->getMessage());
}
?>