<?php

/* загрузка стилей и скритпов */
function load_style_script (){
    /*wp_enqueue_script ();*/
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}


/* загрузка стилей и скритпов */
add_action('wp_enqueue_scripts', 'load_style_script');


/*Поддержка миниаюр*/
add_theme_support('post-thumbnails'); /* 166 x 124*/


/*Меню*/
register_nav_menu('menu', 'Menu');



if ( function_exists('register_sidebars') )
 register_sidebars(array(
        'before_widget' => '',
    	'after_widget' => '',
 		'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование в полном посте
remove_filter( 'the_excerpt', 'wpautop' ); // Отключаем автоформатирование в кратком(анонсе) посте
remove_filter('comment_text', 'wpautop'); // Отключаем автоформатирование в комментариях

?>