<?php
/**
 * Created by PhpStorm.
 * User: Bayazed
 * Date: 19.10.2016
 * Time: 12:42
 */
require_once "config.php";

$cover = '';

$link = mysql_connect($db_hostname, $db_username, $db_password);
mysql_select_db($db_database);

function getCover($cover) {
   return '<div class="cover"></div>
                <div class="edit_form">
                    <form action="/admin" method="get" OnSubmit="sendRequest(); return false">                        
                        ' . $cover . '                                            
                </div>';
}

if ($_GET['page'] == 'brands' && $_GET['ed'] != null)
{
    $query = 'SELECT * FROM companies WHERE id = ' . $_GET['ed'];
    $result = mysql_query($query);

    $cover .= '<input type="text" name="id" id="id" placeholder="#" disabled value="' . mysql_result($result, 0, 'id') . '"><br>';
    $cover .= '<input type="text" name="name" id="name" class="name_value" placeholder="Название" value="' . mysql_result($result, 0, 'name') . '">';
    $cover .= '<textarea name="description" id="description" class="des_value" placeholder="Описание">' . mysql_result($result, 0, 'description') . '</textarea>';
    $cover .= '<input type="text" name="link" id="link" class="name_value" placeholder="Ссылка" value="' . mysql_result($result, 0, 'link_img') . '">';
    $cover .= '<input type="submit" id="send" class="btn btn-success" name="send_brand" value="Отправить"></form>';
    $cover .= '<a href="/admin?page=brands"><button class="btn btn-danger">Отмена</button></a>';

    $cover = getCover($cover);

    $sos = 'ydsyfkgsdf';
}



if ($_GET['send_brand'] == 'Отправить')
{
    $query = 'UPDATE companies SET '
        . 'name = "' . $sos . '", '
        . 'description = "Giorgio Armani S.p.A. — итальянская компания, специализирующаяся на производстве одежды и различных аксессуаров. В 1975 году итальянский модельер Джорджо Армани совместно с Серджо Галлеоти зарегистрировал компанию Giorgio Armani s.p.a.. Постепенно расширяясь, к концу XX века компания стала одной из крупнейших в индустрии моды. Армани стал одним из первых в мире высокой моды, кто начал сегментировать свой бренд — мужская и женская одежда и обувь, аксессуары, часы, галантерея, ювелирные изделия и товары для дома выпускаются под марками Giorgio Armani, Emporio Armani, Armani Exchange, Armani USA, Jeans, Armani Junior, Armani Casa и др. Парфюмерия выпускается по договору с концерном L’Oreal. В 1979 году появилась линия готовой одежды Armani Collezioni, в 1981 году — Emporio Armani, одежда которой предназначена для более молодой и активной клиентуры. Armani Exchange, созданная в 1991 году, рассчитана на ещё более массовый рынок. В 1987 была запущена линия офтальмологических оправ и солнцезащитных очков Armani Occhiali. В 1994 году компания стала выпускать одежду для горнолыжного спорта. В 1996 году появились коллекция одежды для зимних видов спорта (Armani Neve), коллекция для гольфа и линия Armani Classico. В 2000 году была запущена линия товаров для дома Armani Casa.", '
        . 'link_img = "1" WHERE id = 9';

    //$result = mysql_query($query);
    header("Location: /admin?page=brands");
    exit;
}

mysql_close($link);


