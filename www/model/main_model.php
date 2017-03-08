<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 12.10.2016
 * Time: 10:40
 */
require_once "config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

$query = 'SELECT * FROM users';
$result = mysql_query($query);
$count = mysql_num_rows($result);

$flag = 0;
for ($i = 0; $i < $count; $i++)
{
    if(mysql_result($result, $i, 'login') == $_POST['login'] && mysql_result($result, $i, 'password') == $_POST['password'])
    {
        $flag = 1;
    }
}
if($flag == 0 && isset($_POST['login']))
{
    header("Location: /login");
    exit;
}

$query = 'SELECT * FROM goods';
$result = mysql_query($query);
$count_goods = mysql_num_rows($result);

$line0 = '<div class="line text">
                        <h1>Новые поступление на MenAccessories</h1>
                        <a href="/goods"><div class="show_all">Показать все</div></a>
                    </div>';

$line1 = '<div class="line">';
for ($i = $count_goods - 1; $i >= $count_goods - 3; $i--)
{
    $line1 .= '<a href="/goods?id=' . mysql_result($result, $i, 'id') . '">'
        . '<img src="' . mysql_result($result, $i, 'link_img') . '">'
        . '<div class="img_price">' . mysql_result($result, $i, 'price') . ' руб.</div></a>';
}
$line1 .= '</div>';

$line2 = '<div class="line text">
                        <h1>Лучшие товары этого месяца</h1>
                        <a href="/goods"><div class="show_all">Показать все</div></a>
                    </div>';

$line3 = '<div class="line">';
for ($i = 0; $i < 3; $i++)
{
    $line3 .= '<a href="/goods?id=' . mysql_result($result, $i, 'id') . '">'
        . '<img src="' . mysql_result($result, $i, 'link_img') . '">'
        . '<div class="img_price">' . mysql_result($result, $i, 'price') . ' руб.</div></a>';
}
$line3 .= '</div>';

mysql_free_result($result);
mysql_close($link);