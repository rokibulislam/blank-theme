<?php get_header(); ?>

<div id="primary">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">
			
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '' ); ?></p>

				<?php get_search_form(); ?>
			</div>

		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>