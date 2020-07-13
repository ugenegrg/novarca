<div class="section alternative-imageblock <?php echo get_sub_field( 'custom_section_classes' ); ?>" data-menu="<?php the_sub_field( 'custom_section_name' ); ?>">
	<div class="container">
		<div class="heading text-center">
			<h2><?php echo get_sub_field('alternative_image_block_heading'); ?></h2>
		</div>
		
		<div class="flex-container">
			<div class="flex-item text-center">
				
				<img src="<?php echo get_sub_field('alternative_image_block_left'); ?>">
				
				<div class="head-subhead heading small">
					<h2><?php echo get_sub_field('alternative_image_block_left_head'); ?></h2>
					<p><small><?php echo get_sub_field('alternative_image_block_left_subhead'); ?></small></p>
					
					<a class="btn primary" href="<?php echo get_sub_field( 'alternative_image_block_left_button_link' ); ?>"><?php echo get_sub_field( 'alternative_image_block_left_button' ); ?> </a>
					
				</div>
				
			</div>
			
			<div class="flex-item text-center">
				
				<img src="<?php echo get_sub_field('alternative_image_block_right'); ?>">
				
				<div class="head-subhead heading small">
					<h2><?php echo get_sub_field('alternative_image_block_right_head'); ?></h2>
					<p><small><?php echo get_sub_field('alternative_image_block_right_subhead'); ?></small></p>
					
					<a class="btn primary" href="<?php echo get_sub_field( 'alternative_image_block_right_button_link' ); ?>"><?php echo get_sub_field( 'alternative_image_block_right_button' ); ?> </a>
				</div>
				
			</div>
		</div>
	</div>
</div>