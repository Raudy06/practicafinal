<?php

$server = 'bgfwf1n11vpvedtgwz73-mysql.services.clever-cloud.com';
$username = 'ufizqln5nlad91mx';
$password = 'Erz8LZaa1nCyctyIKhqp';
$database = 'bgfwf1n11vpvedtgwz73';


try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>