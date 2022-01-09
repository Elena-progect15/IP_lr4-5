<html>
<head><title> Добавление нового ключа </title></head>
<body>
<H2>Добавление нового ключа:</H2>
<form action="save_new_key.php" method="get">
    <?php
    require_once 'connect.php';
    $mysqli = new mysqli($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу");
    if ($mysqli->connect_errno) {
        echo "Невозможно подключиться к серверу";
    }
    //id
    $result = $mysqli->query("SELECT id_os, name_os FROM os");
    echo "<br>ОС: <select name='id_os'>";

    if ($result) {
        while ($row = $result->fetch_array()) {
            $id_os = $row['id_os'];
            $name_os = $row['name_os'];
            echo "<option value='$id_os'>$name_os</option>";
        }
    }
    echo "</select>";
    //id цифрового магазина
    $result = $mysqli->query("SELECT id_ds, name_ds FROM ds");
    echo "<br>Магазин: <select name='id_ds'>";

    if ($result) {
        while ($row = $result->fetch_array()) {
            $id_ds = $row['id_ds'];
            $name_ds = $row['name_ds'];
            echo "<option value='$id_ds'>$name_ds</option>";
        }
    }
    echo "</select>";

    print "<br> дата приобретения: <input name='date_buy' placeholder='dd-mm-yyyy' type='date' value=$date_buy>";
    print "<br> дата окончания: <input name='date_ex' placeholder='dd-mm-yyyy' type='date' value=$date_ex>";
    print "<br> стоимость: <input name='price' size='11' type='int' value=$price>";
    print "<br> ключ: <input name='key_os' size='11' type='int'value=$key_os>";
    ?>


    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
    <p><a href="key.php"> Вернуться к списку ключей </a>
</form>
</body>
</html>
