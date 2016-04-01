<?php
/**
 * The template for displaying the footer.
 * @package RED_Starter_Theme
 */
?>
			</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="nav">
					<div class="nav-div" id="sort">
						<div class="sort">
							<span>Sort</span>
						</div>

						<div class="neighbourhood menu-item" id="neighbourhood">
							<?php $terms = get_terms( 'neighbourhoods', array (
								'hide_empty' => 0,
							) ); ?>
						  <?php if ( ! empty( $terms ) ) : ?>
								<ul class="foot-sub-menu neigh">
									<li><span class="menu-title">Neighbourhoods</span></li>
								<?php foreach( $terms as $term) : ?>
									<li class="sub-menu-neigh">
										<input type="checkbox" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
										<span><?php echo $term->name ?></span>
									</li>
						    <?php endforeach; ?>
								</ul>
						  <?php endif; ?>
							<div class="neigh-labels"></div>
						</div>

						<div class="partners menu-item">
							<?php $terms = get_terms( 'partners', array (
								'hide_empty' => 0,
							) ); ?>
							<?php if ( ! empty( $terms ) ) : ?>
								<ul class="foot-sub-menu part">
									<li><span class="menu-title">Partners</span></li>
									<?php foreach( $terms as $term) : ?>
									<li class="sub-menu-part">
										<input type="checkbox" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
										<span><?php echo $term->name ?></span>
									</li>
							<?php endforeach; ?>
							</ul>
							<?php endif; ?>
							<div class="part-labels"></div>
						</div>

						<div class="years menu-item">
							<?php $terms = get_terms( 'year', array (
								'hide_empty' => 0,
							) ); ?>
							<?php if ( ! empty( $terms ) ) : ?>
							<ul class="foot-sub-menu year">
								<li><span class="menu-title">Year</span></li>
									<?php foreach( $terms as $term) : ?>
									<li class="sub-menu-year">
										<input type="checkbox" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
										<span><?php echo $term->name ?></span>
									</li>
							<?php endforeach; ?>
							</ul>
							<?php endif; ?>
							<div class="year-labels">
							</div>
						</div>

						<div class="refresh menu-item" id="refresh">
							<span></span>
						</div>
						
					</div>
				</div>
				<div class="social-icons-div">
					<ul>
 						<a href="https://www.facebook.com/CityStudioVancouver/">
							<li>
								<img src="<?php echo get_template_directory_uri().'/images/social-facebook-white.png';?>" class="social-icons" alt="Link to Citystudio Facebook Page" />
							</li>
						</a>
						<a href="https://www.instagram.com/citystudiovan/?hl=en">
							<li>
								<img src="<?php echo get_template_directory_uri().'/images/social-instagram-white.png';?>" class="social-icons" alt="Link to Citystudio Instagram Feed" />
							</li>
						</a>
						<a href="https://twitter.com/CityStudioVan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
							<li>
								<img src="<?php echo get_template_directory_uri().'/images/social-twitter-white.png';?>" class="social-icons twitter" alt="Link to Citystudio Twitter Feed" />
							</li>
						</a>
					</ul>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
