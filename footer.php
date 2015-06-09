<?php
/**
 * The template for displaying the footer
 *
 *blää
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Posh Industries
 * @subpackage THEME NAME
 * @since VERSIONING
 */
?>

<?php
	if ( is_active_sidebar( 'home_right_1' ) ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'home_right_1' ); ?>
		</div><!-- #primary-sidebar -->
	<?php 
	endif; 
	?>

	</div> <!-- #wrapper -->
	<?php wp_footer(); ?>
</body>
</html>