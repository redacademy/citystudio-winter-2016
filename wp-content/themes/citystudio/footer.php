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
							<ul class="foot-sub-menu neigh">
								<li><span class="menu-title">Neighbourhood</span></li>
								<li class="sub-menu-neigh" id="kitsilano">
									<input type="checkbox" name="neighbourhood" value="kitsilano" />
									<span>Kitsilano</span>
								</li>
								<li class="sub-menu-neigh" id="pleasant">
									<input type="checkbox" name="neighbourhood" value="pleasant" />
									<span>Mt. Pleasant</span>
								</li>
								<li class="sub-menu-neigh" id="commercial">
									<input type="checkbox" name="neighbourhood" value="commercial" />
									<span>Commercial Dr.</span>
								</li>
							</ul>
							<div class="neigh-labels">
							</div>
						</div>

						<div class="partners menu-item">
							<ul class="foot-sub-menu part">
								<li><span class="menu-title">Partners</span></li>
								<li class="sub-menu-part" id="SFU">
									<input type="checkbox" name="partners" value="sfu" />
									<span>SFU</span>
								</li>
								<li class="sub-menu-part" id="ubc">
									<input type="checkbox" name="partners" value="ubc" />
									<span>UBC</span>
								</li>
								<li class="sub-menu-part" id="bcit">
									<input type="checkbox" name="partners" value="bcit" />
									<span>BCIT</label>
								</li>
							</ul>
							<div class="part-labels">
							</div>
						</div>


						<div class="years menu-item">
							<ul class="foot-sub-menu year">
								<li><span class="menu-title">year</span></li>
								<li class="sub-menu-year" id="SFU">
									<input type="checkbox" name="year" value="2014" />
									<span>2014</span>
								</li>
								<li class="sub-menu-year" id="ubc">
									<input type="checkbox" name="year" value="2015" />
									<span>2015</span>
								</li>
								<li class="sub-menu-year" id="bcit">
									<input type="checkbox" name="year" value="2016" />
									<span>2016</label>
								</li>
							</ul>
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
