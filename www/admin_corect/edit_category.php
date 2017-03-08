<!DOCTYPE html>
<html>
<head>
    <title>Редактирование категории</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 10.12.2016
 * Time: 13:47
 */
require_once "../model/config.php";
require_once "../model/cookies.php";
mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);



echo '
    <form method="get">
        <label># <input name="id" disabled style="margin-left: 66px" type="number" value="' . $id .'"></label><br><br>
        <label>Название <input name="name" style="margin-left: 10px" type="text" value="' . $name . '"></label><br><br>        
    </form>
    <a href="/admin_corect/edit_category?id=' . $id .'&name="><button>вппав</button></a>
    <a style="margin-left: 10px" href="/"><button>Вернуться на сайт</button></a>
</body>
</html>
';
?>