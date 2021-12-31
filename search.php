<?php get_header(); ?>


<div id="primary">
	
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			
			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search phrase */
					printf( esc_html__( 'Search Results for: %s', '' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'search' );
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
		?>	

	</main>

	<?php // blank_theme_pagination(); ?>

</div>

<?php get_footer(); ?>