<?php
// Template Name: Full Page
get_header( 'fullpage' ); ?>

    <div class="fullpage">
		
		<?php if ( have_rows( 'full_page_template_sections' ) ): ?>
			<?php while ( have_rows( 'full_page_template_sections' ) ): the_row(); ?>
				<?php if( get_row_layout() == 'video_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'video' ); ?>
				<?php elseif ( get_row_layout() == 'parallax_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'parallax' ); ?>
				<?php elseif ( get_row_layout() == 'single_parallax_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'singleparallax' ); ?>
				<?php elseif ( get_row_layout() == 'block_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'block' ); ?>
				<?php elseif ( get_row_layout() == 'client_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'client' ); ?>
				<?php elseif ( get_row_layout() == 'image_block_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'imageblock' ); ?>
				<?php elseif ( get_row_layout() == 'contact_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'contact' ); ?>
				<?php elseif ( get_row_layout() == 'trio_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'trio' ); ?>
				<?php elseif ( get_row_layout() == 'approach_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'approach' ); ?>
				<?php elseif ( get_row_layout() == 'consultant_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'consultant' ); ?>
				<?php elseif ( get_row_layout() == 'alternative_image_block_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'alternative-imageblock' ); ?>
                <?php elseif ( get_row_layout() == 'contact_form_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'contact-form' ); ?>
				<?php elseif ( get_row_layout() == 'feature_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'feature' ); ?>
				<?php elseif ( get_row_layout() == 'simple_section' ): ?>
					<?php get_template_part( 'template-parts/fullpage', 'simple' ); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		
		<?php // get_template_part( 'footer', 'inside' ); ?>

    </div>

<?php get_footer( 'fullpage' ); ?>