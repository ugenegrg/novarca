<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novarca
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container flex-container site-info">
<!--            <div class="flex-item">-->
<!--	            --><?php //the_custom_logo(); ?>
<!--            </div>-->
            <div class="flex-item copyright-text">
				<?php the_field('copyright_text', 'option'); ?>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
