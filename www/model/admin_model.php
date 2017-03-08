<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 12.10.2016
 * Time: 21:03
 */

require_once "config.php";

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

if ($_GET['page'] == 'brands')
{
    $query = 'SELECT * FROM companies';
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    $string[0] = '<h1 class="page-header">Бренды</h1>';
    $string[1] = '<button type="button" class="btn btn-primary" onclick=\'location.href="/addb"\'>Добавить бренд</button>';
    $string[2] = '<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th style="width: 700px">Описание</th>
                        <th>Ссылка</th>                        
                        <th>Действие</th>
                        </tr>
                        </thead>
                    <tbody>';
    $string[3] = "";

    for ($i = 0; $i < $count; $i++)
    {
        $string[3] .= '<tr>
                            <th>' . mysql_result($result, $i, 'id') . '</th>
                            <th>' . mysql_result($result, $i, 'name') . '</th>
                            <th>' . mysql_result($result, $i, 'description') . '</th>
                            <th>' . mysql_result($result, $i, 'link_img') . '</th>
                            <th class="edit_imgs">
                            <a href="/editb?ed=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/edit.png"></a>
                            <a href="/admin?page=brands&del=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/delete.png"></a></th>
                        </tr>';
    }

    $string[3] .= '</tbody>
                </table>
            </div>';
}
elseif ($_GET['page'] == 'categories')
{
    $query = 'SELECT * FROM categories';
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    $string[0] = '<h1 class="page-header">Категории</h1>';
    $string[1] = '<button type="button" class="btn btn-primary" onclick=\'location.href="/addc"\'>Добавить категорию</button>';
    $string[2] = '<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Название</th>                                               
                        <th>Действие</th>
                        </tr>
                        </thead>
                    <tbody>';
    $string[3] = '';
    for ($i = 0; $i < $count; $i++)
    {
        $string[3] .= '<tr>
                            <th>' . mysql_result($result, $i, 'id') . '</th>
                            <th>' . mysql_result($result, $i, 'name') . '</th>                            
                            <th class="edit_imgs">
                            <a href="/editc?ed=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/edit.png"></a>
                            <a href="/admin?page=categories&del=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/delete.png"></a></th>
                        </tr>';
    }
    $string[3] .= '</tbody>
                </table>
            </div>';
}
elseif ($_GET['page'] == 'comments')
{
    $query = 'SELECT * FROM comments';
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    $string[0] = '<h1 class="page-header">Комментарии</h1>';
    $string[1] = '<button type="button" disabled class="btn btn-primary" onclick=\'location.href=""\'>Добавить комментарий</button>';
    $string[2] = '<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Название</th>                                               
                        <th style="width: 700px">Текст</th>
                        <th>№ пользователя</th>
                        <th>№ товара</th>
                        <th>Действие</th>
                        </tr>
                        </thead>
                    <tbody>';
    $string[3] = '';
    for ($i = 0; $i < $count; $i++)
    {
        $string[3] .= '<tr>
                            <th>' . mysql_result($result, $i, 'id') . '</th>
                            <th>' . mysql_result($result, $i, 'title') . '</th>
                            <th>' . mysql_result($result, $i, 'text') . '</th>
                            <th>' . mysql_result($result, $i, 'id_user') . '</th>
                            <th>' . mysql_result($result, $i, 'id_good') . '</th>                            
                            <th class="edit_imgs">
                            <a href="/admin?page=comments&ed=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/edit.png"></a>
                            <a href="/admin?page=comments&del=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/delete.png"></a></th>
                        </tr>';
    }
    $string[3] .= '</tbody>
                </table>
            </div>';
}
elseif ($_GET['page'] == 'users')
{
    $query = 'SELECT * FROM users';
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    $string[0] = '<h1 class="page-header">Пользователи</h1>';
    $string[1] = '<button type="button" disabled class="btn btn-primary" onclick=\'location.href=""\'>Добавить пользователя</button>';
    $string[2] = '<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Логин</th>                                               
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>E-mail</th>
                        <th>Пароль</th>
                        <th>Действие</th>
                        </tr>
                        </thead>
                    <tbody>';
    $string[3] = '';
    for ($i = 0; $i < $count; $i++)
    {
        $string[3] .= '<tr>
                            <th>' . mysql_result($result, $i, 'id') . '</th>
                            <th>' . mysql_result($result, $i, 'login') . '</th>
                            <th>' . mysql_result($result, $i, 'first_name') . '</th>
                            <th>' . mysql_result($result, $i, 'last_name') . '</th>
                            <th>' . mysql_result($result, $i, 'e-mail') . '</th>
                            <th>' . mysql_result($result, $i, 'password') . '</th>                            
                            <th class="edit_imgs">
                            <a href="/admin?page=users&ed=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/edit.png"></a>
                            <a href="/admin?page=users&del=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/delete.png"></a></th>
                        </tr>';
    }
    $string[3] .= '</tbody>
                </table>
            </div>';
}
elseif ($_GET['page'] == 'orders')
{
    $query = 'SELECT * FROM orders';
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    $string[0] = '<h1 class="page-header">Заказы</h1>';
    $string[1] = '<button type="button" disabled class="btn btn-primary" onclick=\'location.href=""\'>Добавить заказ</button>';
    $string[2] = '<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>№ пользователя</th>                                               
                        <th>№ товара</th>
                        <th>Действие</th>
                        </tr>
                        </thead>
                    <tbody>';
    $string[3] = '';
    for ($i = 0; $i < $count; $i++)
    {
        $string[3] .= '<tr>
                            <th>' . mysql_result($result, $i, 'id') . '</th>
                            <th>' . mysql_result($result, $i, 'id_user') . '</th>
                            <th>' . mysql_result($result, $i, 'id_good') . '</th>
                            <th class="edit_imgs">
                            <a href="/admin?page=orders&ed=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/edit.png"></a>
                            <a href="/admin?page=orders&del=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/delete.png"></a></th>
                        </tr>';
    }
    $string[3] .= '</tbody>
                </table>
            </div>';
}
else
{
    $query = 'SELECT * FROM goods';
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    $string[0] = '<h1 class="page-header">Товары</h1>';
    $string[1] = '<button type="button" class="btn btn-primary" onclick=\'location.href="/add"\'>Добавить товар</button>';
    $string[2] = '<div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Название</th>                                               
                        <th style="width: 700px">Описание</th>
                        <th>Цена</th>
                        <th>Ссылка</th>
                        <th>Категория</th>
                        <th>Бренд</th>
                        <th>Действие</th>
                        </tr>
                        </thead>
                    <tbody>';
    $string[3] = '';
    for ($i = 0; $i < $count; $i++)
    {
        $query1 = 'SELECT * FROM categories WHERE id = ' . mysql_result($result, $i, 'id_category');
        $query2 = 'SELECT * FROM companies WHERE id = ' . mysql_result($result, $i, 'id_company');
        $result1 = mysql_query($query1);
        $result2 = mysql_query($query2);

        $string[3] .= '<tr>
                            <th>' . mysql_result($result, $i, 'id') . '</th>
                            <th>' . mysql_result($result, $i, 'name') . '</th>
                            <th>' . mysql_result($result, $i, 'description') . '</th>
                            <th>' . mysql_result($result, $i, 'price') . '</th>
                            <th>' . mysql_result($result, $i, 'link_img') . '</th>
                            <th>' . mysql_result($result1, 0, 'name') . '</th>
                            <th>' . mysql_result($result2, 0, 'name') . '</th>
                            <th class="edit_imgs">
                            <a href="/edit?ed=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/edit.png"></a>
                            <a href="/admin?page=goods&del=' . mysql_result($result, $i, 'id') . '"><img src="/img/admin/delete.png"></a></th>
                        </tr>';
    }
    $string[3] .= '</tbody>
                </table>
            </div>';

    mysql_free_result($result1);
    mysql_free_result($result2);
}

mysql_free_result($result);
mysql_close($link);