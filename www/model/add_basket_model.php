<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 20.10.2016
 * Time: 15:13
 */
require_once "config.php";
$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);
$query = 'SELECT * FROM users WHERE login ="' . $_SESSION['name'] . '"';
$result = mysql_query($query);

$id_user = mysql_result($result, 0, 'id');
$id_good = $_GET['id'];

$query = 'INSERT INTO orders (id_user, id_good) VALUES (' . $id_user . ', ' . $id_good . ')';
$result = mysql_query($query);

if ($result)
{
    echo '<script language="JavaScript"> 
  window.location.href = "/basket";
</script>';
}

