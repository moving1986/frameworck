<?php
use svdsu\View;
/** @var $this View */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= PATH ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= PATH ?>/assets/css/main-slider.css">
    <link rel="stylesheet" href="<?= PATH ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?= PATH ?>/assets/css/style.css">
    <link rel="icon" type="image/png" size="32x32" href="<?= PATH ?>/assets/img/favicon.png">
    <?= $this->getMeta() ?>
</head>
<body>
<div class="wrapper">
    <header> <!-- Start header -->
        <div class="container">
            <div class="firstLine">

                <div class="logo">
                    <object data="<?= PATH ?>/assets/img/logo.svg" type="image/svg+xml"></object>
                </div>
                <div class="headerInfo">
                    <div class="hinfo">
                        <div class="headObj"><object data="<?= PATH ?>/assets/img/ico_mail.svg" type="image/svg+xml"></object></div>
                        <div class="hinfotext"><a href='&#109;&#97;il&#116;o&#58;%6E&#100;%&#55;3u-%3&#55;&#64;&#37;6Dail&#37;2E%&#55;2&#117;'>n&#100;su-7&#64;ma&#105;&#108;&#46;r&#117;</a></div>

                        <div class="headObj"><object data="<?= PATH ?>/assets/img/ico_phone.svg" type="image/svg+xml"></object></div>
                        <div class="hinfotext">8 (38532) 5-70-94 </div>

                        <div class="headObj"><object data="<?= PATH ?>/assets/img/adress.svg" type="image/svg+xml"></object></div>
                        <div class="hinfotext last">Алтайский край, г.Новоалтайск, ул.Дорожная 7, 658083</div>
                    </div>
                    <nav class="headNav">
                        <ul class="nav-menu">
                            <li class="nav-menu__item">
                                <a href="<?= PATH ?>" class="nav-menu__link">Главная</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="/news/" class="nav-menu__link">Новости</a>
                            </li>
                            <li class="nav-menu__item nav-menu__item--parent">
                                <a href="#" class="nav-menu__link">О предприятии</a>
                                <ul class="nav-sub-menu">
                                    <li class="nav-sub-menu__item">
                                        <a href="#" class="nav-sub-menu__link">История ДСУ</a>
                                    </li>
                                    <li class="nav-sub-menu__item">
                                        <a href="#" class="nav-sub-menu__link">Руководство</a>
                                    </li>
                                    <li class="nav-sub-menu__item">
                                        <a href="/page/struktura" class="nav-sub-menu__link">Структура</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="<?= PATH?>/objects" class="nav-menu__link">Наши объекты</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="/page/documents" class="nav-menu__link">Документы</a>
                            </li>
                            <li class="nav-menu__item nav-menu__item--parent">
                                <a href="#" class="nav-menu__link">О нас</a>
                                <ul class="nav-sub-menu">
                                    <li class="nav-sub-menu__item">
                                        <a href="#" class="nav-sub-menu__link">Вакансии</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
<!--                        <div class="push"></div>-->
<!--                        <div class="search"><object data="--><?//= PATH ?><!--/assets/img/ico_search.svg" type="image/svg+xml"></object></div>-->
                    </nav>
                </div>

            </div>
        </div>
    </header>


    <!-- End header -->