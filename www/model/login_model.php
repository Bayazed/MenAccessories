<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 20.10.2016
 * Time: 11:16
 */
require_once "config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

$query = 'SELECT * FROM users';
$result = mysql_query($query);
$count = mysql_num_rows($result);

if (isset($_POST['login']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])
    && isset($_POST['password']) && isset($_POST['input_in']))
{
    $flag = true;
    for($i = 0; $i < $count; $i++)
    {
        if ($_POST['login'] == mysql_result($result, $i, 'login'))
        {
            $flag = false;
            echo "<script>alert('Такой пользователь уже зарегистрирован. Повторите регистрацию.');</script>";
            break;
        }
    }
    if ($flag)
    {
        $query1 = 'INSERT INTO users (first_name, last_name, e-mail, password) VALUES 
("'.$_POST['first_name'].'", "'.$_POST['last_name'].'", "'.$_POST['email'].'", "'.$_POST['password'].'")';

        $result1 = mysql_query($query1);

        if($result1)
        {
            echo "<script>alert('Вы успешно прошли регистрацию! Пожалуйста авторизуйтесь.');</script>";
            echo $_POST['login'] . $_POST['first_name'];
        }
    }
}
