<?php if (!defined('BASE_DIR')) exit('No direct script access allowed');
/**

title:  Tag Manager
description: Google Tag Manager
slug: google/tag_manager
layout: seo.php
parser: simple

menu[title]: Tag Manager
menu[group]: Google
menu[order]: 1

-articleClass: pad30

 **/

?>

h1(mar0 bg-lime200 pad30-rl pad10-tb) Google Tag Manager

div(pad30-rl mar30-tb)

_ Диспетчер тегов с простым и удобным интерфейсом. Помогает создавать теги (фрагменты кода на странице), тестировать их и управлять ими.

<?= img('1.webp', 'Пример'); ?>

h2 Зачем вебмастеру Google Tag Manager?

_ Бесплатный сервис позволяет:

ul
* интегрировать на сайт Google Analytics и другие метрики;
* создавать пользовательские теги;
* заниматься отладкой тегов;
* откатываться к более ранним версиям;
* настраивать текстовую подмену на сайте.
/ul

h2 Как вебмастеру использовать Google Tag Manager в работе?

_ *Настраивать работу с тегами.* Современный вебмастер использует много кодов, которые нужно разместить на разных страницах сайта. При этом некоторые теги должны вызываться только при соблюдении определенных условий. Чтобы упростить задачу, можно установить на все страницы UTM-код, добавить все необходимые пиксели и выбрать настройки с помощью Google Tag Manager.

_ *Упростить работу с рекламными сетями.* Сервис позволяет быстро разместить разные коды рекламных сетей на разных страницах сайта. Вебмастер может добавить в настройках возможность использовать разные рекламные сети для разных типов аудиторий. Например, тизерные сети для аудитории 18+ или Push-сети для пользователей мобильных приложений.

<?php snippet('next-prev', ['', '']); ?>

/div
