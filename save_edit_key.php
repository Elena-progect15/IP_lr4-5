<html>
<body>
<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером

$id = $_GET['id'];
$date_buy = $_GET['date_buy'];
$date_ex = $_GET['date_ex'];
$id_os = $_GET['id_os'];
$id_ds = $_GET['id_ds'];
$price = $_GET['price'];
$key_os = $_GET['key_os'];

$result = $mysqli->query("UPDATE dk SET date_buy='$date_buy', date_ex='$date_ex' , 
id_os='$id_os', id_ds='$id_ds', price='$price', key_os='$key_os'
WHERE id='$id'");


if ($result) {
    echo 'Все сохранено. <a href="key.php"> Вернуться к списку ключей </a>';
} else {
    echo 'Ошибка сохранения. <a href="key.php">Вернуться к списку ключей</a> ';
}
?>
</body>
</html>