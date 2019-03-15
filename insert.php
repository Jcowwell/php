<?php

$db = new PDO('mysql:host=localhost;dbname=hw4;charset=utf8mb4', 'user', 'password');

$sql = "insert into fruits(name, color) VALUES('Tangerine','Orange')";

$insert = $db->exec($sql);
?>
