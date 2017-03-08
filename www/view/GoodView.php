<?php

/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 12.10.2016
 * Time: 14:14
 */
class GoodView
{
    public $goodCSS = '<link href="/css/default.css" rel="stylesheet" type="text/css">
        <link href="/css/goods.css" rel="stylesheet" type="text/css">';

    public $categories = '<div class="top_categorias">
                <div class="img_categorias">
                    <a href="/goods?cat=suit"><img src="/img/costumes.jpg"></a>
                    <a href="/goods?cat=shoos"><img src="/img/shoos.jpg"></a>
                    <a href="/goods?cat=watch"><img src="/img/watches.jpg"></a>
                </div>
            </div>';

    private $main = '<div class="main">';

    function setMain($line) {
        $this->main .= $line;
    }

    function getMain() {
        return $this->main . "</div>";
    }
}