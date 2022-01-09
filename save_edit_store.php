<html>
<body>
<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером


$id_ds = $_GET['id_ds'];
$name_ds = $_GET['name_ds'];
$url = $_GET['url'];

$zapros = "UPDATE ds SET name_ds='$name_ds', url='$url' 
WHERE id_ds='$id_ds'";

$result = $mysqli->query($zapros);

if ($result) {
    echo 'Все сохранено. <a href="stores.php"> Вернуться к списку магазинов </a>';
} else {
    echo 'Ошибка сохранения. <a href="stores.php">Вернуться к списку магазинов</a> ';
}
?>
</body>
</html>