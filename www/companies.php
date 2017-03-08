<?php

session_start();

require_once "view/BaseView.php";
require_once "view/MenuTopView.php";
require_once "view/BrandView.php";
require_once "model/brands_model.php";
require_once "model/cookies.php";

$title = "Бренды";

$menu_object = new MenuTopView();
$base_object = new BaseView();
$brand_object = new BrandView();

$menu_object->setMenu($_SESSION['name'], $count_orders_in_basket);
$base_object->setTitle($title);

$html_begin = $base_object->startHead . $base_object->getTitle() . $brand_object->brandCSS . $menu_object->menuTopCSS
    . $base_object->endHead;

$html_content1 = $menu_object->menuTop;

for ($i = 0; $i < count($brands); $i++)
    $brand_object->setMain($brands[$i]);

$html_content1 .= $brand_object->getMain() . $base_object->endMenu . $base_object->end;

echo $html_begin . $html_content1;