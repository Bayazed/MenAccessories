<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 10.12.2016
 * Time: 16:26
 */
require_once "model/config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

$query1 = "";
$result1 = "";

if ($_GET['ed'] != null)
{
    $query1 = "SELECT * FROM companies WHERE id = " . $_GET['ed'];
    $result1 = mysql_query($query1);
}

if ($_GET['title'] != null)
{
    $query = 'UPDATE companies 
              SET name = "' . $_GET['title'] . '", description = "' . $_GET['des'] . '", link_img = "' . $_GET['link'] . '" 
              WHERE id = ' . $_GET['id'];
    $result = mysql_query($query);
    if($result) echo 1;
    else echo 0;
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Изменить бренд</title>
</head>
<body>
<div>
    <form action="" method="get">
        ID__ <input type="text" name="id" id="id" placeholder="ID" value="<?php
        if ($_GET['ed'] != null) echo mysql_result($result1, 0, 'id');
        ?>"><br><br>

        Name <input type="text" name="title" id="title" placeholder="Название" value="<?php
        if ($_GET['ed'] != null) echo mysql_result($result1, 0, 'name');
        ?>"><br><br>

        Desc <textarea name="des" id="des" placeholder="Описание"><?php
        if ($_GET['ed'] != null) echo mysql_result($result1, 0, 'description');
        ?></textarea><br><br>

        Link <input type="text" name="link" id="link" placeholder="Ссылка" value="<?php
        if ($_GET['ed'] != null) echo mysql_result($result1, 0, 'link_img');
        ?>"><br><br>

        <input type="submit" name="sub" id="sub" placeholder="Отправить"><br>
    </form>
    <br><br><a href="/admin"><button>Назад</button></a>
</div>
</body>
</html>
