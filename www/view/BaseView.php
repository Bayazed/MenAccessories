<?php

/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 07.10.2016
 * Time: 19:51
 */
class BaseView
{
    private $title = "MenAccessories";

    public $baseCSS = '
        <link href="/css/default.css" rel="stylesheet" type="text/css">
        <link href="/css/base.css" rel="stylesheet" type="text/css">
    ';

    public $baseJS = '';

    public $startHead = '
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name = "viewport" content="width=device-width, initial-scale=1">

        <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
        <script type = "text/javascript" src = "/ckeditor/ckeditor.js"></script>

        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    ';

    public $brendsAndCategories = '<div id="page">
            <div class="brends">
                <a href="/companies#dol_and_gab"><div><img src="/img/dolce_gabbana.svg.png" width="200px"></div></a>
                <a href="/companies#armani"><div><img src="/img/armani.png" width="200px"></div></a>
                <a href="/companies#boss"><div><img src="/img/hugo_boss.png" width="200px"></div></a>
                <a href="/companies#gucci"><div><img src="/img/gucci.png" width="200px"></div></a>
                <a href="/companies#paul"><div><img src="/img/paul-smith.png" width="400px"></div></a>
            </div>
            <div class="top_categorias">
                <div class="img_categorias">
                    <a href="/goods?cat=suit"><img src="/img/costumes.jpg"></a>
                    <a href="/goods?cat=shoos"><img src="/img/shoos.jpg"></a>
                    <a href="/goods?cat=watch"><img src="/img/watches.jpg"></a>
                </div>
            </div>';


    private $main = '<div class="main">
        <div class="news">            
    ';

    public $endHead = '</head><body>';

    public $endMenu = '<div class="menu_bottom">
                <div class="copyright">
                    Copyright @ MenAccessories 2016.<br>
                    Designed by Vladislav Ulanov
                </div>
            </div>';

    public $end = '</div></body></html>';



    function setTitle($title) {
        $this->title = $title;
    }

    function getTitle() {
        return "<title>" . $this->title . "</title>";
    }

    function setMain($line) {
        $this->main .= $line;
    }

    function getMain() {
        return $this->main . "</div></div>";
    }
}