<div class="sticky-navigation">
	<div class="nav-div open" id="sort">
		<div class="themes sort-menu-item">
		
			<p>Themes<i class="fa fa-sort-desc" aria-hidden="true"></i></p>
			<?php $terms = get_terms( 'themes', array (
				'hide_empty' => 0,
			) ); ?>
		  <?php if ( ! empty( $terms ) ) : ?>
				<ul class="nav-sub-menu">
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
			</div>
		</div>
		<div class="partners sort-menu-item">
			<p>Schools<i class="fa fa-sort-desc fa-lg" aria-hidden="true"></i></p>
			<?php $terms = get_terms( 'partners', array (
				'hide_empty' => 0,
			) ); ?>
			<?php if ( ! empty( $terms ) ) : ?>
				<ul class="nav-sub-menu part">
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
			</div>
		</div>

		<div class="years sort-menu-item">
			<p>Years<i class="fa fa-sort-desc fa-lg" aria-hidden="true"></i></p>
			<?php $terms = get_terms( 'year', array (
				'hide_empty' => 0,
			) ); ?>
			<?php if ( ! empty( $terms ) ) : ?>
			<ul class="nav-sub-menu year">
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
			</div>
		</div>

		<div class="refresh menu-item" id="refresh">
			<span></span>
		</div>
	</div>
</div>
