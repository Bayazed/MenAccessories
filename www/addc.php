<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 10.12.2016
 * Time: 16:21
 */
require_once "model/config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

if ($_GET['title'] != null)
{
    $query = 'INSERT INTO categories (name) VALUES ("' . $_GET['title'] . '")';
    $result = mysql_query($query);
    if($result) echo 1;
    else echo 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Добавить категорию</title>
</head>
<body>
<div>
    <form action="" method="get">
        <input type="text" name="title" id="title" placeholder="Название"><br><br>
        <input type="submit" name="sub" id="sub" placeholder="Отправить"><br>
    </form>
    <br><br><a href="/admin"><button>Назад</button></a>
</div>
</body>
</html>