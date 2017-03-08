<?php

/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 12.10.2016
 * Time: 17:00
 */
class BrandView
{
    public $brandCSS = '
        <link href="/css/default.css" rel="stylesheet" type="text/css">
        <link href="/css/brends.css" rel="stylesheet" type="text/css">';

    private $main = '<div class="page">
    <div class="list">';

    function setMain($brand) {
        $this->main .= $brand;
    }

    function getMain() {
        return $this->main . '</div></div>';
    }
}