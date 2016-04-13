<?php
/**
 * The template for displaying the footer.
 * @package RED_Starter_Theme
 */
?>

			<footer id="colophon" class="site-footer" role="contentinfo">
					<?php get_template_part ('template-parts/content', 'nav'); ?>
				<div class="social-icons-div">
					<ul>
 						<li>
							<a href="https://www.facebook.com/CityStudioVancouver/">
								<img src="<?php echo get_template_directory_uri().'/images/social-facebook-white.png';?>" class="social-icons" alt="Link to Citystudio Facebook Page" />
							</a>
						</li>

						<li>
							<a href="https://www.instagram.com/citystudiovan/?hl=en">
								<img src="<?php echo get_template_directory_uri().'/images/social-instagram-white.png';?>" class="social-icons" alt="Link to Citystudio Instagram Feed" />
							</a>
						</li>

						<li>
							<a href="https://twitter.com/CityStudioVan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
								<img src="<?php echo get_template_directory_uri().'/images/social-twitter-white.png';?>" class="social-icons twitter" alt="Link to Citystudio Twitter Feed" />
							</a>
						</li>
					</ul>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #content -->
		<?php wp_footer(); ?>
	</body>
</html>
