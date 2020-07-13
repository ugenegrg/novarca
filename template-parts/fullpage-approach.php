<div class="section approach <?php echo get_sub_field( 'custom_section_classes' ); ?>" data-menu="<?php the_sub_field( 'custom_section_name' ); ?>">
    <div class="container">

        <div class="heading center m-b-60"><h2 class="text-center"><?php the_sub_field( 'approach_title' ); ?></h2>
        </div>

        <div id="tabs" class="tabs novarca-tabs is-md">
			
			<?php if ( have_rows( 'approach_block' ) ): ?>
                <ul class="tabs-menus m-b-60">
					<?php $menu_count = 1;
					
					$icon_arr = array(
						'',
						'<i class="fab fa-searchengin"></i>',
						'<i class="fas fa-crosshairs"></i>',
						'<i class="fas fa-tools"></i>',
						'<i class="fas fa-redo-alt"></i>',
						'<i class="fas fa-chart-line"></i>'
					);
					
					
					while ( have_rows( 'approach_block' ) ): the_row();
						
						$active = '';
						if ( $menu_count === 1 ) {
							$active = 'active';
						}
						
						?>

                        <li class="<?php echo $active; ?>">

                            <div class="clip">
                                <a href="#tabs-1" data-tab="<?php echo $menu_count; ?>">
									
									<?php echo $icon_arr[ $menu_count ]; ?>
                                    <span class="approach-name is-md"><?php the_sub_field( 'approach_name' ); ?></span>
                                    <span class="approach-name-subtext is-md"><?php the_sub_field( 'approach_heading' ); ?></span>
                                </a>
                            </div>

                        </li>
						
						<?php $menu_count ++; endwhile; ?>
                </ul>
			<?php endif; ?>
			
			
			<?php if ( have_rows( 'approach_block' ) ): ?>
                <div class="tabs-contents center">
					<?php $tab_count = 1;
					while ( have_rows( 'approach_block' ) ): the_row();
						$active = '';
						if ( $tab_count === 1 ) {
							$active = 'active';
						}
						
						?>

                        <div class="tabs-content <?php echo $active; ?>" id="tabs-1"
                             data-tab="<?php echo $tab_count; ?>">
                            <div class="is-sm">
                                <h2 class="text-center"><?php the_sub_field( 'approach_name' ); ?></h2>
                                <span class="approach-name-subtext text-center"><?php the_sub_field( 'approach_heading' ); ?></span>
                            </div>

                            <?php the_sub_field( 'approach_paragraph' ); ?>
                        </div>
						
						<?php $tab_count ++; endwhile; ?>
                </div>
			<?php endif; ?>

        </div>

        <div class="accordion novarca-accordion is-sm">
			<?php if ( have_rows( 'approach_block' ) ): ?>
			
			<?php $accordion_count = 1;
			
			$icon_arr = array(
				'',
				'<i class="fab fa-searchengin"></i>',
				'<i class="fas fa-crosshairs"></i>',
				'<i class="fas fa-tools"></i>',
				'<i class="fas fa-redo-alt"></i>',
				'<i class="fas fa-chart-line"></i>'
			);
			
			while ( have_rows( 'approach_block' ) ): the_row();
				
				$active = '';
				if ( $accordion_count === 1 ) {
					$active = 'active';
				}
			
			?>
                <div class="accordion-block <?php echo $active; ?>">
                    <div class="accordion-head">
                        <a href="#tabs-1" data-tab="<?php echo $accordion_count; ?>">
							
                            <div class="apporach-title-icon-wrapper">
	                            <?php echo $icon_arr[ $accordion_count ]; ?>
                            </div>
                            
                            <div class="approach-title-wrapper">
                                <span class="approach-name"><?php the_sub_field( 'approach_name' ); ?></span>
                                <span class="approach-name-subtext"><?php the_sub_field( 'approach_heading' ); ?></span>
                            </div>
                            
                        </a>
                    </div>
                    <div class="accordion-content">
                        <?php the_sub_field( 'approach_paragraph' ); ?>
                    </div>
                </div>
				<?php $accordion_count++; endwhile; ?>
        </div>
		<?php endif; ?>


    </div>
</div>