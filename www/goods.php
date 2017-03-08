<?php

session_start();

require_once "view/MenuTopView.php";
require_once "view/BaseView.php";
require_once "view/GoodView.php";
require_once "model/goods_model.php";
require_once "model/cookies.php";

$title = "Все товары";

$base_object = new BaseView();
$menu_object = new MenuTopView();
$good_object = new GoodView();

$menu_object->setMenu($_SESSION['name'], $count_orders_in_basket);
$base_object->setTitle($title);

$html_begin = $base_object->startHead . $base_object->getTitle() . $good_object->goodCSS . $menu_object->menuTopCSS
    . $base_object->endHead;

$html_content1 = $menu_object->menuTop . $good_object->categories;

for ($i = 0; $i < count($lines); $i++)
{
    $good_object->setMain($lines[$i]);
}
$html_content2 = $good_object->getMain() . $base_object->endMenu . $base_object->end;

echo $html_begin . $html_content1 . $html_content2;