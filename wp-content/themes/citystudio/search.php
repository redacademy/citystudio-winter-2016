<?php
/**
* Template Name: Search Results Page
 */
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="searchpage">
				<header class="search-archive-header">
					<h1>Project Archive</h1>
					<div class="searchform-container">
						<?php get_search_form(); ?>
					</div>
				</header>
				<div class="archive-blurb">
					<p>
						<?php the_field('archive_blurb') ?>
					</p>
				</div>
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
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
						<li style=
		            "background: url('<?php the_field('banner_image'); ?>') no-repeat center;
		             background-size: cover;
								">
						<a href="<?php echo get_the_permalink();?>">
						</a>
						</li>
						<?php
						        }
						    }else{
						?>
						        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
						        <div class="alert alert-info">
						          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
						        </div>
						<?php } ?>
					<?php wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
