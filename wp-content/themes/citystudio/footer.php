<?php
/**
 * The template for displaying the footer.
 * @package RED_Starter_Theme
 */
?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="footer-branding-container">
				<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri().'/images/citystudio-logo.png';?>">
				</div>
				<div class="social-icons-div">
								<a href="https://www.facebook.com/CityStudioVancouver/">
									<img src="<?php echo get_template_directory_uri().'/images/social-facebook-white.png';?>" class="social-icons" alt="Link to Citystudio Facebook Page" />
								</a>
								<a href="https://www.instagram.com/citystudiovan/?hl=en">
									<img src="<?php echo get_template_directory_uri().'/images/social-instagram-white.png';?>" class="social-icons" alt="Link to Citystudio Instagram Feed" />
								</a>
								<a href="https://twitter.com/CityStudioVan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
									<img src="<?php echo get_template_directory_uri().'/images/social-twitter-white.png';?>" class="social-icons" alt="Link to Citystudio Twitter Feed" />
								</a>
								<a href="http://www.youtube.com/user/CityStudioVancouver">
									<img src="<?php echo get_template_directory_uri().'/images/social-youtube-white.png';?>" class="social-icons" alt="Link to Citystudio YouTube Feed" />
								</a>
				</div>
			</div> <!--end footer branding -->

			<div class="footer-info-container">
					<div class="footer-info-block">
						<h3>Located At</h3>
						<ul>
							<li>
							<a href="http://maps.google.com/?q=1800 Spyglass Place Vancouver, B.C."><i class="fa fa-map-marker" aria-hidden="true"></i>
 								1800 Spyglass Place Vancouver, B.C.</a>
							</li>
							<li>
								<a href="tel:604 874 6401"> <i class="fa fa-phone" aria-hidden="true"></i><b> 604 874 6401</b></a>
							</li>
						</ul>
					</div>


					<div class="footer-info-block1">
						<h3>Keep Exploring</h3>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-keep-exploring' ) ); ?>
					</div>

					<div class="footer-info-block2">
						<h3>CITYSTUDIO</h3>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-citystudio' ) ); ?>
					</div>
			</div><!-- end footer info container -->


		</footer><!-- #colophon -->
		<div class="copyright">© Copyright <?php echo date("Y") ?> CityStudio Vancouver</div>
	</div><!-- #content -->
		<?php wp_footer(); ?>
	</body>
</html>
