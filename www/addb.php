<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 19.10.2016
 * Time: 20:47
 */
require_once "model/config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

if ($_GET['title'] != null && $_GET['des'] != null && $_GET['img'] != null)
{
    $query = 'INSERT INTO companies (name, description, link_img) VALUES ("' . $_GET['title'] . '", "' . $_GET['des'] . '", "' . $_GET['img'] .'")';

    $result = mysql_query($query);
    if($result) echo 1;
    else echo 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Добавить бренд</title>
</head>
<body>
<div>
    <form action="" method="get">
        <input type="text" name="title" id="title" placeholder="Название"><br>
        <textarea style="width: 500px; height: 200px" placeholder="Описание" name="des"></textarea><br>
        <input type="text" name="img" id="img" placeholder="Ссылка"><br><br>
        <input type="submit" name="sub" id="sub" placeholder="Отправить"><br>
    </form>
    <br><br><a href="/admin"><button>Назад</button></a>
</div>
</body>
</html>
