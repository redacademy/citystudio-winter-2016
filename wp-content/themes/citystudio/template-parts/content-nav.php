<div class="nav-div" id="sort">
	<div class="sort" id="sort_nav">
		<label>Sort</label>
	</div>

	<div class="themes menu-item">
		<?php $terms = get_terms( 'themes', array (
			'hide_empty' => 0,
		) ); ?>
	  <?php if ( ! empty( $terms ) ) : ?>
			<ul class="nav-sub-menu theme">
				<li><span class="menu-title">Themes</span></li>
			<?php foreach( $terms as $term) : ?>
				<li class="sub-menu-theme" >
					<input type="checkbox" id="theme_val" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
					<span><?php echo $term->name ?></span>
				</li>
	    <?php endforeach; ?>
			</ul>
	  <?php endif; ?>
		<div class="theme-labels">
			<i class="fa fa-star" aria-hidden="true"></i>
		<br>
		</div>
	</div>

	<div class="partners menu-item">
		<?php $terms = get_terms( 'partners', array (
			'hide_empty' => 0,
		) ); ?>
		<?php if ( ! empty( $terms ) ) : ?>
			<ul class="nav-sub-menu part">
				<li><span class="menu-title">Partners</span></li>
				<?php foreach( $terms as $term) : ?>
				<li class="sub-menu-part">
					<input type="checkbox" id="partners_val" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
					<span><?php echo $term->name ?></span>
				</li>
		<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		<div class="part-labels">
			<i class="fa fa-star" aria-hidden="true"></i>
			<br>
		</div>
	</div>

	<div class="years menu-item">
		<?php $terms = get_terms( 'year', array (
			'hide_empty' => 0,
		) ); ?>
		<?php if ( ! empty( $terms ) ) : ?>
		<ul class="nav-sub-menu year">
			<li><span class="menu-title">Year</span></li>
				<?php foreach( $terms as $term) : ?>
				<li class="sub-menu-year">
					<input type="checkbox" id="year_val" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
					<span><?php echo $term->name ?></span>
				</li>
		<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		<div class="year-labels">
			<i class="fa fa-star" aria-hidden="true"></i>
			<br>
		</div>
	</div>

	<div class="refresh menu-item" id="refresh">
		<span></span>
	</div>

</div>

</div>
<div class="nav-description">
 <p> This is an <b> interactive gallery! </b> use the <img src="<?php bloginfo('template_directory'); ?>/images/sort.png">  button to filter through the gallery.</p>
</div>