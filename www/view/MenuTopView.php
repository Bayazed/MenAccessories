<?php

/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 07.10.2016
 * Time: 19:40
 */
class MenuTopView
{
    public $menuTopCSS = '<link href="/css/menu_top.css" rel="stylesheet" type="text/css">';
    public $menuTop = '
        <div class="header">
            <div class="header_menu_top">
                <div id="logo">
                    <a href="/"><h1>MENACCESSORIES</h1></a>
                </div>
                <a href="/login"><div id="login">
                    <h3>LOGIN or REGISTER</h3>
                </div></a>
            </div>
            <div class="header_menu">
                <a href="/"><div id="home"><h3>Главная</h3></div></a>
                <a href="/goods"><div id="products"><h3>Товары</h3></div></a>
                <a href="/companies"><div id="about"><h3>Бренды</h3></div></a>
                <a href="/blog"><div id="blog"><h3>Блог</h3></div></a>
                <a href="/contacts"><div id="contact"><h3>Контакты</h3></div></a>
                <a href="/basket"><div id="backet"><img src="/img/basket.png" width="30px"/><div id="sqrt"><p>0</p></div></div></a>
            </div>
        </div>';

    function setMenu($name, $count_orders_in_basket) {
        $this->menuTop = '<div class="header">
            <div class="header_menu_top">
                <div id="logo">
                    <a href="/"><h1>MENACCESSORIES</h1></a>
                </div>
                <a href="/login"><div id="login">
                    <h3>' . $name . '</h3>
                </div></a>
            </div>
            <div class="header_menu">
                <a href="/"><div id="home"><h3>Главная</h3></div></a>
                <a href="/goods"><div id="products"><h3>Товары</h3></div></a>
                <a href="/companies"><div id="about"><h3>Бренды</h3></div></a>
                <a href="/blog"><div id="blog"><h3>Блог</h3></div></a>
                <a href="/contacts"><div id="contact"><h3>Помощь</h3></div></a>
                <a href="/basket"><div id="backet"><img src="/img/basket.png" width="30px"/><div id="sqrt"><p>' . $count_orders_in_basket . '</p></div></div></a>
            </div>
        </div>';
    }
    function getMenu() {
        return $this->menuTop;
    }
}