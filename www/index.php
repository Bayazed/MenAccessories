<?php

session_start();

if (isset($_POST['login']) && $_POST['login'] != 'Login')
{
    $login = $_POST['login'];
    setcookie('login', $login);
    $_SESSION['name'] = $login;
}
require_once "view/MenuTopView.php";
require_once "view/RotatorView.php";
require_once "view/BaseView.php";
require_once "model/main_model.php";
require_once "model/cookies.php";

$title = "Магазин мужских аксессуаров";

$menu_object = new MenuTopView();
$rotator_object = new RotatorView();
$base_object = new BaseView();

if (isset($_SESSION['name']))
{
    $menu_object->setMenu($_SESSION['name'], $count_orders_in_basket);
}

$base_object->setTitle($title);

$html_begin = $base_object->startHead . $base_object->getTitle() . $base_object->baseCSS . $menu_object->menuTopCSS
    . $rotator_object->rotatorCSS . $rotator_object->rotatorJS . $base_object->endHead;

$html_content1 = $menu_object->menuTop . $rotator_object->rotator . $base_object->brendsAndCategories;

$base_object->setMain($line0);
$base_object->setMain($line1);
$base_object->setMain($line2);
$base_object->setMain($line3);

$html_content2 = $base_object->getMain() . $base_object->endMenu . $base_object->end;

echo $html_begin . $html_content1 . $html_content2;