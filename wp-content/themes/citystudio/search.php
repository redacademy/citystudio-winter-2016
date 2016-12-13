<?php
/**
* Template Name: Search Results Page
 */
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="searchpage">
				<header class="citystudio-banner">
					<div class="searchform-title">
						<h1>Project Archive</h1>
					</div>
					<div class="searchform-container">
						<?php dynamic_sidebar( 'searchform' ); ?>
					</div>
				</header>
				<div class="search-list-container">
					<ul class="search-list">
						<?php
						$s=get_search_query();
						$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='display:none;font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
								 <a href="<?php echo get_the_permalink();?>">
							 		<li style=
							 				"background: url('<?php the_field('banner_image'); ?>') no-repeat center;
							 				 background-size: cover;
							 				">
							 			<div class="tag-description">
							 			 <?php the_title( '<h2 class="tag-description-title">', '</h2>'); ?>

							 			</div>
							 		</li>
							 	</a>
						<?php
						        }
						    }else{
						?>
						      <div class="alert alert-info">
										<h2 style='font-weight:bold;color:#ffffff'>Nothing Found</h2>
						        	<p>We're sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
						      </div>
						<?php } ?>
					<?php wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
