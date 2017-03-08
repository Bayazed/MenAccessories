<?php

session_start();

require_once "view/MenuTopView.php";
require_once "view/BaseView.php";
require_once "model/cookies.php";

$title = "Блог";

$base_object = new BaseView();
$menu_object = new MenuTopView();

$menu_object->setMenu($_SESSION['name'], $count_orders_in_basket);
$base_object->setTitle($title);

$html_begin = $base_object->startHead . $base_object->getTitle() . $base_object->baseCSS . $menu_object->menuTopCSS
    . $base_object->endHead;

$html_content = $menu_object->getMenu();

echo $html_begin . $html_content;


