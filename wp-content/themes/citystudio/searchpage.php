<?php
/**
* Template Name:Search Page
 */
//page id = 872
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="searchpage">
				<header class="search-archive-header">
					<div class="searchform-title">
						<h1>Project Archive</h1>
					</div>
					<div class="searchform-container">
						<?php dynamic_sidebar( 'searchform' ); ?>
					</div>
				</header>
				<div class="archive-blurb">
					<p>
						<?php the_field('archive_blurb') ?>
					</p>
				</div>
				<section class="sticky-navigation">
	<div class="clickoff">
	</div>
	<div class="nav-div open" id="sort">
	
		<div class="themes sort-menu-item" id="themes">
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
			 	<i class="fa fa-times" aria-hidden="true"></i>
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
			 	<i class="fa fa-times" aria-hidden="true"></i>
			</div>
		</div>

		<div class="years sort-menu-item">
			<p>Years<i class="fa fa-sort-desc fa-lg" aria-hidden="true"></i></p>
			<?php $terms = get_terms( 'years', array (
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
			<div class="year-labels"><i class="fa fa-times" aria-hidden="true"></i></div>
		</div>

		<div class="refresh menu-item" id="refresh" ></div>
		<span class="refresh-hover">Refresh The Gallery</span>
	</div>
</section>
				<div class="search-list-container">
					<div class="search-list-inner">
						<ul class="search-list">
							<?php
								$currentPage = !empty($_REQUEST['pagenum']) ? (int)$_REQUEST['pagenum'] : 1;
								$loop = new WP_Query(
									array(
										'post_type' => 'project',
										'posts_per_page' => 12,
										'paged' => $currentPage,
									)
								);
								$currentPageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$nextPageNum = (int)$currentPage + 1;
								$nextPageUrl = site_url() . $_SERVER['REQUEST_URI'] . '?pagenum=' . $nextPageNum;

								/**
					       * We construct the pagination arguments to enter into our paginate_links
					       * function.
					       */
					      $args = array(
									'base'            => '%_%',
									'format'          => '?pagenum=%#%',
					        'total'           => $loop->max_num_pages,
					        'current'         => $currentPageNumber,
					        'show_all'        => false,
					        'end_size'        => 1,
					        'mid_size'        => 6,
					        'prev_next'       => true,
					        'prev_text'       => 'Previous',
					        'next_text'       => 'Next',
					        'type'            => 'list',
					        'add_args'        => array(),
					        'add_fragment'    => '',
					      );

					      $paginateLinks = paginate_links( $args );
							?>
							<?php while ($loop->have_posts()) : $loop->the_post(); ?>
							<a href="<?php echo get_the_permalink();?>" class="search-post" data-next-page="<?php echo $nextPageNum; ?>">
								<li style=
				            "background: url('<?php the_field('banner_image'); ?>') no-repeat center;
				             background-size: cover; height: 100%; width: 100%;
										">
									<div class="tag-description">
								 	 <?php the_title( '<h2 class="tag-description-title">', '</h2>'); ?>

								  </div>
								</li>
							</a>
						<?php
							endwhile;
						?>
						</ul>
						<ul class="js-next-search-list"></ul>
					</div>

					<div class="js-page-numbers">
						<?php	if ($paginateLinks) : ?>
							<a href="<?php echo $nextPageUrl; ?>" class="js-load-more">Load More</a>
							<?php echo $paginateLinks; ?>
						<?php endif; ?>
					</div>
					<?php
						wp_reset_query();
					?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
