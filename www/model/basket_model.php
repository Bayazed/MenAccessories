<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 20.10.2016
 * Time: 12:27
 */

require_once "config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

$query = 'SELECT * FROM users WHERE login = "' . $_SESSION['name'] . '"';
$result = mysql_query($query);

$id_user = mysql_result($result, 0 , 'id');

$query = 'SELECT * FROM orders WHERE id_user = ' . $id_user;
$result = mysql_query($query);
$count_orders = mysql_num_rows($result);

$backetCSS = '<link href="/css/basket.css" rel="stylesheet" type="text/css">';

$table = '<div class="page"><h1 class="page-header">Заказы</h1>
            <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>#</th>                                                                      
                        <th>Название</th>
                        <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody>';

for ($i = 0; $i < $count_orders; $i++)
{
    $query1 = 'SELECT * FROM goods WHERE id = ' . mysql_result($result, $i, 'id_good');
    $result1 = mysql_query($query1);

    $table .= '<tr>
                <th>' . mysql_result($result, $i, 'id') . '</th>
                <th>' . mysql_result($result1, 0, 'name') . '</th>
                <th>' . mysql_result($result1, 0, 'price') . '</th></tr>';
}
