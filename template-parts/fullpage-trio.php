<div class="section trio <?php echo get_sub_field( 'custom_section_classes' ); ?>" data-menu="<?php the_sub_field( 'custom_section_name' ); ?>">
    <div class="container">
        <div class="flex-container">
			<?php if ( have_rows( 'trio_blocks' ) ): ?>
				
				<?php while ( have_rows( 'trio_blocks' ) ): the_row();
					$heading   = get_sub_field( 'trio_heading' );
					$paragraph = get_sub_field( 'trio_paragraph' );
					
					?>

                    <div class="flex-item text-center-mobile">
                        
                        <?php if( get_sub_field( 'trio_image' ) ): ?>
                        <img src="<?php echo get_sub_field( 'trio_image' ); ?>">
                        <?php endif; ?>
                        
                        <div class="heading">
                            <h2><?php echo $heading; ?></h2>
                        </div>
                        <p><?php echo $paragraph; ?></p>
                        
                    </div>
				
				<?php endwhile; ?>
    
			<?php endif; ?>
        </div>
    </div>
</div>