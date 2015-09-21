<!DOCTYPE html>
<html lang="fr">

<?php get_template_part('head'); ?>
                     
<body>

<?php get_header(); ?> 

<div class="container">
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) :?>
    <?php the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<!-- <?php get_sidebar(); ?> -->

<?php get_footer(); ?>

</body>
</html>