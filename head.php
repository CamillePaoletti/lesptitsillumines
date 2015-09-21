<head>
	<title>
		<?php bloginfo('name') ?>
		<?php if ( is_404() ) : ?> &raquo; 
		<?php _e('Not Found') ?>
		<?php elseif ( is_home() ) : ?> &raquo; 
		<?php bloginfo('description') ?>
		<?php else : ?>
		<?php wp_title() ?>
		<?php endif ?>
	</title>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- ici, il faut blinder de mots clefs, c'est pour que les moteurs de recherche nous trouvent !! -->
	<meta name="keywords" content="sciences, science, ludique, illutration, jeunesse, physique, jeux, animations" />
	<!-- pour l'adaptation à la taille de l'écran (mobiles) -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- feuilles de style -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /><!-- style.css -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Barbara, ajoute les feuilles de style supplémentaires ici, attention, il faut les mettre à la racine et non plus dans un dossier "css" à cause de l'organisation "wordpress"-->
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/owl.theme.css"> -->
       
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- polices -->
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC|Roboto:100' rel='stylesheet'>
	
	<!-- liens javascript -->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- Barbara, mets les liens javascript supplémentaires dont tu as besoin ici :-->
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script> 
	<!-- <script src="<?php bloginfo('stylesheet_directory'); ?>js/owl.carousel.min.js"></script> -->
	
	<?php wp_head(); ?>
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); <?php wp_head(); ?>
</head>