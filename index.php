<!DOCTYPE html>
<html lang="fr">

<?php get_template_part('head'); ?>
                     
<body>

<?php get_header(); ?>

<div class="container">
	<?php while(have_posts()): ?>
		<!--<?php the_post(); ?>-->
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>

</body>
</html>