<?php

session_start();

require_once "view/MenuTopView.php";
require_once "view/BaseView.php";
require_once "model/cookies.php";

$title = "Помощь";

$base_object = new BaseView();
$menu_object = new MenuTopView();

$menu_object->setMenu($_SESSION['name'], $count_orders_in_basket);
$base_object->setTitle($title);

$html_begin = $base_object->startHead . $base_object->getTitle() . $base_object->baseCSS . $menu_object->menuTopCSS
    . $base_object->endHead;

$html_content = $menu_object->getMenu() . "<br><br><br><br><br><p>Мы рады приветствовать Вас на страницах нашего сайта!</p>
<br><p>1) Кнопка \"Главная\" в верхнем меню отправит вас на главную старницу сайта, где вы можете ознакомиться с популярными товарами.</p>
<p>2) Кнопка \"Товары\" в верхнем меню отправит вас на страницу всех наших товаров.</p>
<p>3) Кнопка \"Бренды\" в верхнем меню отправит вас на страницу всех ведущих брендов.</p>
<p>4) Кнопка \"Login\" в верхнем меню отправит вас на страницу регистрации.</p>
<p>5) Кнопка со значком корзины в верхнем меню отправит вас на страницу ваших заказов.</p>";

echo $html_begin . $html_content;