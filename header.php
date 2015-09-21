<header>
	<div class="header-container">
		<div class="container">
			<h1>
				<?php bloginfo('description'); ?> <!--cherche automatiquement le sous titre-->
				<a href="<?php bloginfo('url'); ?>">
					<img alt="Les p'tits illuminés" src="<?php bloginfo('template_directory'); ?>/img/logo_nav_1.png"></img>
				</a>
        	</h1>
        	
        	<!-- Barbara, il faudrait remplacer "nav" par des boutons qui renvoient vers de nouvelles pages-->
        	<nav>
            	<a href="#concept" class="nav-button">Le concept</a>
                <a href="#commander" class="nav-button margedroitenav">Commander</a>
                <a href="<?php bloginfo('url'); ?>" class="lucien"></a>
                <!-- pour mettre un lien vers le home quand on clique sur le titre/l'image :
                <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> -->
                <a href="#kits" class="nav-button margegauchenav">Les kits</a>
                <a href="#fineEquipe" class="nav-button">La fine équipe</a>
            </nav>
		</div>
	</div>
</header>
	

