<html>
<body>
<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером

$id_os = $_GET['id_os'];

$name_os = $_GET['name_os'];
$type_os = $_GET['type_os'];
$x_os = $_GET['x_os'];
$dev_os = $_GET['dev_os'];
$count_us = $_GET['count_us'];

$zapros = "UPDATE os SET name_os='$name_os', type_os='$type_os',
x_os='$x_os', dev_os='$dev_os', count_us='$count_us' 
WHERE id_os='$id_os'";

$result = $mysqli->query($zapros);

if ($result) {
    echo 'Все сохранено. <a href="index.php"> Вернуться к списку ОС </a>';
} else {
    echo 'Ошибка сохранения. <a href="index.php">Вернуться к списку ОС</a> ';
}
?>
</body>
</html>