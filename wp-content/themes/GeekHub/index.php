<?php
/*
Template Name: Archives with Content
*/
?>

<?php
    if (is_single() ) :
        get_header();
    elseif ( is_page()) :
        get_header( 'page' );
    else :
        get_header();
    endif;
?>


<?php if (have_posts()) : while (have_posts()) : the_post();?>

        <?php /* <h2><?php the_title();?></h2> */ ?>
        <?php the_post_thumbnail('full', 'clss=imgstyle') ?>
        <?php the_content(); ?>


<?php endwhile;?>
 <!--post navigation-->
<?php endif; ?>
 <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>



<?php/*
       if ( is_page() ) :
       get_sidebar() ;
       endif;*/
?>


<?php
        if (is_single() ) :
            get_footer();
        elseif ( is_page()) :
            get_footer();
        else :
            get_footer();
        endif;

?>