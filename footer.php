<!-- <div id="footer">
  <p> Copyright &#169;
   <?php print(date(Y)); ?>
   <?php bloginfo('name'); ?>
   <br /> Blog propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://www.fran6art.com">Fran6art</a>
   <br />
   <a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> et <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>. <?php echo get_num_queries(); ?>
   requêtes. <?php timer_stop(1); ?> secondes.

  </p>
</div>
-->



<footer id="fineEquipe">
	<!-- container -->
	<div class="container">
		<!-- equipe -->
		<div class="equipe">
			<h2>La fine équipe</h2>
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/img/camille_paoletti.png" alt="Camille Paoletti">
					<figcaption>Camille Paoletti</figcaption>
				</figure>
				<figure>
					<img src="<?php bloginfo('template_directory'); ?>/img/barbara_govin.png" alt="Barbara Govin">
					<figcaption>Barbara Govin</figcaption>
				</figure>
                    <p>
						Camille se passionne pour la vulgarisation des savoirs scientifiques, tandis que Barbara oriente ses recherches dans la transmission des savoirs par l’image.
                    </p>
		</div><!-- fin equipe -->
		<!-- contacts -->
		<div class="contact">
			<br/><br/>
			<a href="<?php echo site_url(); ?>/contact">Contactez-nous</a>
			<p>Retrouvez-nous par ici :</p>
			<a href="//twitter.com/hashtag/ptitsillumines?src=hash"><i class="fa fa-twitter-square"></i></a>
			<a href="//www.facebook.com/lesptitsillumines"><i class="fa fa-facebook-square"></i></a>
			<a href="#"><i class="fa fa-pinterest-square"></i></a>
			<a href="#"><i class="fa fa-rss-square"></i></a>
			<br/><a href="<?php echo site_url(); ?>/mentions-legales">Mentions légales</a>
			<p>&#169 2015 - Les p’tits illuminés, Tous droits réservés.</p>
		</div><!-- fin contacts -->
		<!-- presse -->
		<div class="presse">
			<br/><br/>
			<p>On parle de nous !</p>
			<a href="http://fr.slideshare.net/IciCNancyPro/science-you-programme-grandpublic">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo_science_and_you.png" alt="logo de Science and You">
			</a>
		</div><!-- fin presse -->
		<!-- newsletter -->
		<div class="newsletter">
			<input type='text' class="text-newsletter" placeholder="Tapez votre adresse mail">
			<div class="btn-newsletter">
				<p>INSCRIVEZ-VOUS !</p>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/img/newsletter.png" alt="picto newsletter">
		</div><!-- fin newsletter -->
	</div><!-- fin container -->
</footer>
