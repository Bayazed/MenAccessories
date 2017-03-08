<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 12.10.2016
 * Time: 14:18
 */


require_once "config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

$query = 'SELECT * FROM categories';
$result = mysql_query($query);
$cat_true = true;


if ($_GET['cat'] == 'suit')
{
    $lines[0] = "<div id=\"bread_crumbs\">
                        <a href=\"/goods\">Товары</a> &blacktriangleright;
                        <a href=\"/goods?cat=suit\">" . mysql_result($result, 0, 'name') . "</a></div>";

    $query = 'SELECT * FROM goods WHERE id_category = 1';

}
elseif ($_GET['cat'] == 'shoos')
{
    $lines[0] = "<div id=\"bread_crumbs\">
                        <a href=\"/goods\">Товары</a> &blacktriangleright;
                        <a href=\"/goods?cat=shoos\">" . mysql_result($result, 1, 'name') . "</a></div>";

    $query = 'SELECT * FROM goods WHERE id_category = 2';
}
elseif ($_GET['cat'] == 'watch')
{
    $lines[0] = "<div id=\"bread_crumbs\">
                        <a href=\"/goods\">Товары</a> &blacktriangleright;
                        <a href=\"/goods?cat=watch\">" . mysql_result($result, 2, 'name') . "</a></div>";

    $query = 'SELECT * FROM goods WHERE id_category = 3';
}
elseif ($_GET['id'] != null)
{
    $query = 'SELECT * FROM goods WHERE id =' . $_GET['id'];
    $result = mysql_query($query);
    $cat_true = false;
    $lines[0] = "<div id=\"bread_crumbs\">
                        <a href=\"/goods\">Товары</a> &blacktriangleright;
                        <a href=\"/goods?id=" . $_GET['id'] . "\">" . $_GET['id'] . "</a></div>
                        <div id=\"text_good\">
                            <h1>" . mysql_result($result, 0, 'name') . "</h1>
                            <p>" . mysql_result($result, 0, 'description') . "</p>
                            <a href='/basket?id=" . $_GET['id'] . "'><button>Положить в корзину</button></a>
                        </div>";
}
else {
    $lines[0] = "<div id=\"bread_crumbs\">
                        <a href=\"/goods\">Товары</a> &blacktriangleright;
                        <a href=\"/goods\">Все товары</a></div>";

    $query = 'SELECT * FROM goods';
}

$result = mysql_query($query);
$count_goods = mysql_num_rows($result);
$goods[0] = "";

for ($i = 0; $i < $count_goods; $i++)
{
    $good = '<a href="/goods?id=' . mysql_result($result, $i, 'id') . '">'
        . '<img src="' . mysql_result($result, $i, 'link_img') . '">'
        . '<div class="img_price">' . mysql_result($result, $i, 'price') . ' руб.</div></a>';
    $goods[$count_goods - 1 - $i] = $good;
}

$index = 0;
for ($count = 1; true; $count++) {
    $lines[$count] = '<div class="line">';
    for ($i = 0; $i < 3; $i++) {
        $lines[$count] .= $goods[$index];
        $index++;
        if ($index == $count_goods) break;
    }
    $lines[$count] .= '</div>';
    if ($index == $count_goods) break;
}

mysql_free_result($result);
mysql_close($link);