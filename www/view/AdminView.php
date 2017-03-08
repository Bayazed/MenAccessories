<?php

/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 12.10.2016
 * Time: 20:58
 */
class AdminView
{
    public $adminCSS = '<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
                        <link href="/css/admin.css" rel="stylesheet" type="text/css">';

    public $adminMenu = '<nav class="navbar navbar-inverse navbar-fixed-top">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="/">MenAccessories</a>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="/admin?page=goods">Товары</a></li>
                                        <li><a href="/admin?page=brands">Бренды</a></li>
                                        <li><a href="/admin?page=categories">Категории</a></li>
                                        <li><a href="/admin?page=comments">Комментарии</a></li>
                                        <li><a href="/admin?page=users">Пользователи</a></li>
                                        <li><a href="/admin?page=orders">Заказы</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>';

    private $main = '<div class="container-fluid">
                        <div class="row">';

    public $end = '</body>
                    </html>';

    function setMain($string) {
        $this->main .= $string;
    }

    function getMain() {
        return $this->main . '</div></div>';
    }
}