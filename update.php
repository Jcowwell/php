<?php

$db = new PDO('mysql:host=localhost;dbname=hw4;charset=utf8mb4', 'user', 'password');

$sql = "UPDATE fruits SET color='bacon' WHERE id=1";

$insert = $db->exec($sql);
?>
