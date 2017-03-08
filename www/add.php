<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 19.10.2016
 * Time: 17:08
 */
require_once "model/config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

if ($_GET['title'] != null && $_GET['des'] != null && $_GET['price'] != null && $_GET['img']
!= null && $_GET['cat'] != null && $_GET['cam'] != null)
{
    $query = 'INSERT INTO goods (name, description, price, link_img, id_category, id_company) VALUES 
("' . $_GET['title'] . '", "' . $_GET['des'] . '", ' . $_GET['price'] . ', "' . $_GET['img'] . '", ' . $_GET['cat'] . ', '
        . $_GET['cam'] . ')';

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
<html>
    <head>
        <title>Добавить товар</title>
    </head>
    <body>
        <div>
            <form action="" method="get">
                <input type="text" name="title" id="title" placeholder="Название"><br>
                <textarea style="width: 500px; height: 200px" placeholder="Описание" name="des"></textarea><br>
                <input type="text" name="price" id="price" placeholder="Цена"><br>
                <input type="text" name="img" id="img" placeholder="Ссылка"><br>
                <select name="cat" id="cat">
                    <?php
                    for ($i = 0; $i < $count2; $i++)
                    {
                        echo "<option value='" . mysql_result($result2, $i, 'id') . "'>" . mysql_result($result2, $i, 'name') . "</option>";
                    }
                    ?>
                </select><br>


                <select name="cam" id="cam">
                    <?php
                    for ($i = 0; $i < $count3; $i++)
                    {
                        echo "<option value='" . mysql_result($result3, $i, 'id') . "'>" . mysql_result($result3, $i, 'name') . "</option>";
                    }
                    ?>
                </select><br>

                <!--input type="number" name="cam" id="cam" placeholder="Бренд"><br><br-->
                <input type="submit" name="sub" id="sub" placeholder="Отправить">
            </form>
            <br><br><a href="/admin"><button>Назад</button></a>
        </div>
    </body>
</html>


