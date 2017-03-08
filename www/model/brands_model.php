<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 12.10.2016
 * Time: 17:00
 */
require_once "config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

$query = 'SELECT * FROM companies';
$result = mysql_query($query);
$count_brands = mysql_num_rows($result);

$brands[0] = "";
for ($i = 0; $i < $count_brands; $i++)
{
    $brands[$i] = '<div class="brand">
        <img src="' . mysql_result($result, $i, 'link_img') . '">
        <p>'. mysql_result($result, $i, 'description') .'</p>
    </div>';
}


mysql_free_result($result);
mysql_close($link);