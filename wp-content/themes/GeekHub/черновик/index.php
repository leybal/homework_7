<?php get_header(); ?>
as
    <?php if ( have_posts() ) : ?>
    <?php if ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
        <?php> the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>