<html>
<head>
<title>  Редактирование данных о магазине </title>
</head>
<body>
<?php
require_once 'connect.php';
$mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
if ($mysqli->connect_errno) {
echo "Невозможно подключиться к серверу"; 
}// установление соединения с сервером
$id_ds = $_GET['id_ds'];

$result = $mysqli->query("SELECT name_ds, url FROM ds WHERE id_ds='$id_ds'");
if ($result){
 while ($gm = $result->fetch_array()) {
 $name_ds = $gm['name_ds'];
 $url = $gm['url'];
 }}
 
print "<form action='save_edit_store.php' method='get'>";
print "Название: <input name='name_ds' size='30' type='varchar'
value='$name_ds'>";
print "<br>url: <input name='url' size='30' type='varchar'
value='$url'>";
print "<input type='hidden' name='id_ds' size='11' type='int'
value='$id_ds'>";
print "<input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='stores.php'> Вернуться к списку магазинов </a>";
?>
</body>
</html>