        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
            <title><?php the_title(); ?></title>
            <meta name="description" content="Знай своїх героїв - знайомтеся ближче з тими, хто робить GeekHub реальністю.">
            <meta name="keywords" content="команда GeekHub, team, команда">
            <link rel="stylesheet" type="text/css" media="all" href="<?php get_template_directory_uri(). "/css/1.css" ?>" />
            <?php wp_head(); ?>

        </head>
        <body class="inner">
        <div id="wrap">
            <div id="header">
                <h1><a href="<?php bloginfo('url'); ?>/">GeekHub</a></h1>
                <ul class="nav">
                    <li><a href="<?php bloginfo('url'); ?>/">Головна</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/?page_id=321">Про GeekHub</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/?page_id=325">Команда</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/?page_id=328">FAQ</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/?page_id=334">Зв’язок</a></li>
                </ul>
                <ul class="links">
                    <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
                    <li class="vk"><a href="http://vkontakte.ru/geekhub">Вконтакте</a></li>
                    <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
                    <li class="yb"><a href="http://www.youtube.com/user/GeekHubchannel">youtube</a></li>
                </ul>
            </div><!-- header -->
            <div id="content">

        <?php
        if ((get_permalink() != get_home_url()) &&
            ((get_permalink()) != get_bloginfo('url').'/?page_id=321' ) &&
            ((get_permalink()) != get_bloginfo('url').'/?page_id=325' ) &&
            ((get_permalink()) != get_bloginfo('url').'/?page_id=328' ) &&
            ((get_permalink()) != get_bloginfo('url').'/?page_id=334' ))
            {get_sidebar() ;};
        ?>

        <?php



        ?>