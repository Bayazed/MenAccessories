<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 12.10.2016
 * Time: 19:43
 */
require_once "view/AdminView.php";
require_once "view/BaseView.php";
require_once "model/admin_model.php";
require_once "model/delete_model.php";
require_once "model/edit_model.php";

session_start();

if ($_SESSION['name'] != "Admin")
{
    header("Location: /");
}

$title = "Панель администратора";

$base_object = new BaseView();
$admin_object = new AdminView();

$base_object->setTitle($title);

$html_begin = $base_object->startHead  . $cover . $base_object->getTitle() . $admin_object->adminCSS . $base_object->endHead;
$html_content = $admin_object->adminMenu;

for ($i = 0; $i < count($string); $i++)
{
    $admin_object->setMain($string[$i]);
}

$html_content .= $admin_object->getMain() . $admin_object->end;
echo $html_begin . $html_content;