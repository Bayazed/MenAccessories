<?php

/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 07.10.2016
 * Time: 19:55
 */
class RotatorView
{
    public $rotatorJS = '<script type="text/javascript" src="/js/slide_show.js"></script>';
    public $rotatorCSS = '<link href="/css/slide_show.css" rel="stylesheet" type="text/css">';
    public $rotator = '
        <div id="rotator">
            <ul>
                <li class="show"><img src="/img/mens1.jpg" width="100%" alt="mens1" /></li>
                <li><img src="/img/mens2.jpg" width="100%" alt="mens2" /></li>
                <li><img src="/img/mens3.jpg" width="100%" alt="mens3" /></li>
                <li><img src="/img/mens4.jpg" width="100%" alt="mens4" /></li>
                <li><img src="/img/mens5.jpg" width="100%" alt="mens5" /></li>
            </ul>
        </div>
    ';
}