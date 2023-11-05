<?php
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', 'error.txt');

$db_server = 'rdbms.strato.de';
$db_user = 'dbu10769';
$db_password = 'lololomickS06';
$db_name = 'dbs12173458';

try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Verbindingsfout: ' . $e->getMessage());
}
?>