<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к БД";
}

$date_buy = $_GET['date_buy'];
$date_ex = $_GET['date_ex'];
$id_os = $_GET['id_os'];
$id_ds = $_GET['id_ds'];
$price = $_GET['price'];
$key_os = $_GET['key_os'];

// Выполнение запроса
$result = $mysqli->query("INSERT INTO dk
        SET date_buy='$date_buy', date_ex='$date_ex',
        id_os='$id_os', id_ds='$id_ds',
        price='$price', key_os ='$key_os'"
);

if ($result) {
    print "<p>Внесение данных прошло успешно!";
    print "<p><a href='key.php'> Вернуться к списку </a>";
} else {
    print "Ошибка сохранения <a href='key.php'> Вернуться к списку </a>";
}

?>