	<div class="nav-div" id="sort">
		<div class="sort" id="sort_nav">
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
						<input type="checkbox" id="neigh_val" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
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
						<input type="checkbox" id="partners_val" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
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
						<input type="checkbox" id="year_val" name="<?php echo $term->name ?>" value="<?php echo $term->slug ?>" />
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