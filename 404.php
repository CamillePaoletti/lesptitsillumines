<!-- * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 *-->
 
<!DOCTYPE html>
<html lang="fr">

<?php get_template_part('head'); ?>
                     
<body>

<?php get_header(); ?> 

	
				<div class="container">
					<h2><?php _e( "Ooops, c'est embarrassant..."); ?></h2>
					<p><?php _e( 'Cette page ne semble plus contenir les informations voulues. Pour les retrouver, essayez-donc de faire une recherche !'); ?></p>

					<?php get_search_form(); ?>
				</div>
			


<?php get_footer(); ?>

</body>
</html>