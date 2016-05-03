			<div class="push-footer"></div>
			</div><!-- end of content -->
			<footer id="footer">
				<?php
				 $lang = get_locale();
				 if($lang == 'en'){
				 ?>
 				<div class="row">
 					<ul>
 						<li class="small-20 small-offset-2 medium-12 medium-offset-2 large-8 large-offset-2 columns">
 							<h4 class="uppercase">Business hours</h4>
 							<p>tuesday, wednesday and friday 9.30 am - 5.30 pm</p>
 							<p>thursday 9.30 pm - 6.00 pm and 19.00 pm - 21.00 pm</p>
 							<p>saturday 9.30 am - 5.00 pm</p>
 							<p>1st Sunday 1.00 pm - 5.00 pm</p>
 							<a class="underlined" href="<?php home_url(); ?>/info-en">Exceptions</a>
 						</li>
 						<li class="small-20 small-offset-2 medium-8 medium-offset-1 large-4 large-offset-1 columns">
 							<h4 class="uppercase">Contact</h4>
 							<p>Noordeinde 29</p>
 							<p>2514 GB Den Haag</p>
 							<p class="phonenumber">+31 (0)70 346 78 05</p>
 							<a href="mailto:info@azami.nl" class="email"><p>info@azami.nl</p></a>
 							<div class="followus">
 								<p>Follow us at:</p>
 								<a class="icon-social" href="http://www.facebook.com/AzamiTheHague" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons_social/white_facebook.png" /></a>
 								<a class="icon-social" href="http://www.instagram.com/azamioptiek" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons_social/white_instagram.png" /></a>
                <a class="icon-social" href="http://azamioptiek.tumblr.com/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons_social/white_tumblr.png" /></a>
                <a class="icon-social" href="https://twitter.com/Azami_optiek" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons_social/white_twitter.png" /></a>
 							</div>
 						</li>
 						<li class="signup small-20 small-offset-2 medium-20 medium-offset-2 large-6 large-offset-1 columns">
 							<h4 class="uppercase">Newsletter</h4>
 							<?php mc4wp_form(); ?>
 						</li>
 					</ul>
 				</div>
				 <?php
			 	} else {
				 ?>
				<div class="row">
					<ul>
						<li class="small-20 small-offset-2 medium-12 medium-offset-2 large-8 large-offset-2 columns">
							<h4 class="uppercase">Openingstijden</h4>
              <p>dinsdag, woensdag en vrijdag 9.30 – 17.30 uur</p>
              <p>donderdag 9.30 – 18.00 uur en 19.00 - 21.00 uur</p>
              <p>zaterdag 9.30 – 17.00 uur</p>
              <p>elke 1e zondag van de maand 13.00 – 17.00 uur</p>
							<a class="underlined" href="<?php home_url(); ?>/info">Uitzonderingen</a>
						</li>
						<li class="small-20 small-offset-2 medium-8 medium-offset-1 large-4 large-offset-1 columns">
							<h4 class="uppercase">Contact</h4>
							<p>Noordeinde 29</p>
							<p>2514 GB Den Haag</p>
							<p class="phonenumber">+31 (0)70 346 78 05</p>
							<a href="mailto:info@azami.nl" class="email"><p>info@azami.nl</p></a>
							<div class="followus">
								<p>Volg ons op:</p>
								<a class="icon-social" href="http://www.facebook.com/AzamiTheHague" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons_social/white_facebook.png" /></a>
								<a class="icon-social" href="http://www.instagram.com/azamioptiek" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons_social/white_instagram.png" /></a>
                <a class="icon-social" href="http://azamioptiek.tumblr.com/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons_social/white_tumblr.png" /></a>
                <a class="icon-social" href="https://twitter.com/Azami_optiek" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons_social/white_twitter.png" /></a>
							</div>
						</li>
						<li class="signup small-20 small-offset-2 medium-20 medium-offset-2 large-6 large-offset-1 columns">
							<h4 class="uppercase">Newsletter</h4>
							<?php mc4wp_form(); ?>
						</li>
					</ul>
				</div>
				<?php
				}
				?>
			</footer>

		<!-- Gmaps plugin needs this -->
		<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>

		<?php wp_footer(); ?>
	</body>
</html>