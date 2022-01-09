<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
$id = $_GET['id'];
$result = $mysqli->query("DELETE FROM dk WHERE id='$id'");
header("Location: key.php");
exit;
?>
