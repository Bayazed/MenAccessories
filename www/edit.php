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
    $query1 = "SELECT * FROM goods WHERE id = " . $_GET['ed'];
    $result1 = mysql_query($query1);
}

if ($_GET['title'] != null)
{
    $query = 'UPDATE goods 
              SET name = "' . $_GET['title'] . '", description = "' . $_GET['des'] . '", price = "' . $_GET['price'] . '", 
              link_img = "' . $_GET['link'] . '", id_category = "' . $_GET['cat'] . '", id_company = "' . $_GET['cam'] . '" 
              WHERE id = ' . $_GET['id'];
    $result = mysql_query($query);
    if($result) echo 1;
    else echo 0;
}

$guery2 = "SELECT * FROM categories";
$result2 = mysql_query($guery2);
$count2 = mysql_num_rows($result2);

$guery3 = "SELECT * FROM companies";
$result3 = mysql_query($guery3);
$count3 = mysql_num_rows($result3);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Изменить товар</title>
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

        Price <input type="text" name="price" id="price" placeholder="Ссылка" value="<?php
            if ($_GET['ed'] != null) echo mysql_result($result1, 0, 'price');
        ?>"><br><br>

        Link <input type="text" name="link" id="link" placeholder="Ссылка" value="<?php
            if ($_GET['ed'] != null) echo mysql_result($result1, 0, 'link_img');
        ?>"><br><br>

        <select name="cat" id="cat">
            <?php
            for ($i = 0; $i < $count2; $i++)
            {
                if (mysql_result($result2, $i, 'id') == mysql_result($result1, 0, 'id_category'))
                    echo "<option selected value='" . mysql_result($result2, $i, 'id') . "'>" . mysql_result($result2, $i, 'name') . "</option>";
                else
                    echo "<option value='" . mysql_result($result2, $i, 'id') . "'>" . mysql_result($result2, $i, 'name') . "</option>";
            }
            ?>
        </select><br>


        <select name="cam" id="cam">
            <?php
            for ($i = 0; $i < $count3; $i++)
            {
                if (mysql_result($result3, $i, 'id') == mysql_result($result1, 0, 'id_company'))
                    echo "<option selected value='" . mysql_result($result3, $i, 'id') . "'>" . mysql_result($result3, $i, 'name') . "</option>";
                else
                    echo "<option value='" . mysql_result($result3, $i, 'id') . "'>" . mysql_result($result3, $i, 'name') . "</option>";
            }
            ?>
        </select><br>

        <input type="submit" name="sub" id="sub" placeholder="Отправить"><br>
    </form>
    <br><br><a href="/admin"><button>Назад</button></a>
</div>
</body>
</html>