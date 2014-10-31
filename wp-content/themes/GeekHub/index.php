<?php
/*
Template Name: Archives with Content
*/
?>

<?php
if ( is_home() ) :
    get_header( 'home' );
elseif ( is_404() ) :
    get_header( '404' );
else :
    get_header();
endif;
?>


 <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
        <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
        <div class="entrytext">
            <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
        </div>
    </div>
 <?php endwhile; endif; ?>
 <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>




<?php
    if ( is_home() ) :
        get_footer( 'home' );
    elseif ( is_404() ) :
        get_footer( '404' );
    else :
        get_footer();
endif;
?>