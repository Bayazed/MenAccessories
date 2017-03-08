<?php

require_once "view/BaseView.php";
require_once "view/LoginView.php";
require_once "model/login_model.php";
require_once "model/config.php";

$login = '';

$title = "Авторизация";

$base_object = new BaseView();
$login_object = new LoginView();

$base_object->setTitle($title);

$register = $_POST['register'];
$html_begin = $base_object->startHead . $base_object->getTitle() . $login_object->loginBlockCSS . $base_object->endHead;

if ($register == "Регистрация")
{
    $html_content = $login_object->registerBlock . $base_object->end;
}
else {
    $html_content = $login_object->loginBlock . $base_object->end;
}

echo $html_begin . $html_content;