<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 13.10.2016
 * Time: 18:14
 */
require_once "config.php";


function delete($url)
{
    header("Location: /admin?page=" . $url);
    exit;
}

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);


if ($_GET['page'] == 'goods' && $_GET['del'] != null)
{
    $query = 'DELETE FROM goods WHERE id = ' . $_GET['del'];
    $result = mysql_query($query);
    delete('goods');
}
elseif ($_GET['page'] == 'brands' && $_GET['del'] != null)
{
    $query = 'DELETE FROM companies WHERE id = ' . $_GET['del'];
    $query1 = 'DELETE FROM goods WHERE id_company = ' . $_GET['del'];
    $result = mysql_query($query);
    $result1 = mysql_query($query1);
    delete($_GET['page']);
}
elseif ($_GET['page'] == 'categories' && $_GET['del'] != null)
{
    $query = 'DELETE FROM categories WHERE id = ' . $_GET['del'];
    $query1 = 'DELETE FROM goods WHERE id_category = ' . $_GET['del'];
    $result = mysql_query($query);
    $result1 = mysql_query($query1);
    delete($_GET['page']);
}
elseif ($_GET['page'] == 'comments' && $_GET['del'] != null)
{
    $query = 'DELETE FROM comments WHERE id = ' . $_GET['del'];
    $result = mysql_query($query);
    delete($_GET['page']);
}
elseif ($_GET['page'] == 'users' && $_GET['del'] != null)
{
    $query = 'DELETE FROM users WHERE id = ' . $_GET['del'];
    $result = mysql_query($query);
    delete($_GET['page']);
}
elseif ($_GET['page'] == 'orders' && $_GET['del'] != null)
{
    $query = 'DELETE FROM orders WHERE id = ' . $_GET['del'];
    $result = mysql_query($query);
    delete($_GET['page']);
}

mysql_close($link);

