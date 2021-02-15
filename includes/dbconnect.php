<?php
$host = 'localhost';
$dbname = 'boekwinkel';
$username = 'root';
$password = '';

$conStr = "mysql:host=$host;dbname=$dbname";
$con = new PDO ($conStr, $username, $password);
?>

