<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div id="wrap">
    <div id="header">
        <h1><a href="<?php bloginfo('url'); ?>/">GeekHub</a></h1>
        <ul class="nav">
            <li class="active"><a href="<?php bloginfo('url'); ?>/">Головна</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page_id=321">Про GeekHub</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page_id=325">Команда</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page_id=328">FAQ</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page_id=334">Зв'язок</a></li>
        </ul>

        <ul class="links">
            <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
            <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
            <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
            <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
        </ul>
        <span class="line"></span>

        <h4 class="registration">Реєстрацію на 4й сезон закрито</h4>
        <p class="note">*залиште нам ваш емейл і ми повідомимо вас про початок реєстрації</p>
        <form action="#">
            <fieldset>
                <span></span>
                <input type="text" class="email" placeholder="Ваш email" />
                <input type="submit" value="Відіслати" />
            </fieldset>

        </form>
        <img src="http://geekhub.ck.ua/images/splash.png" alt="splash" />
        

    </div><!-- header -->