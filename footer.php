<?php


?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
		<aside>
			<?php dynamic_sidebar( 'footer-sidebar' ); ?>
		</aside>
	<?php endif; ?>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>