<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 19.10.2016
 * Time: 18:54
 */
require_once "config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

if ($_SESSION['name'] != null) {
    $query = 'SELECT * FROM users WHERE login = "' . $_SESSION['name'] . '"';
    $result = mysql_query($query);

    $id_user = mysql_result($result, 0, 'id');

    $query = 'SELECT * FROM orders WHERE id_user = ' . $id_user;
    $result = mysql_query($query);
    $count_orders_in_basket = mysql_num_rows($result);
}
