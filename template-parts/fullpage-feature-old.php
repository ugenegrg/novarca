<?php
$custom_section_classes = get_sub_field( 'custom_section_classes' );
$custom_section_name    = get_sub_field( 'custom_section_name' );
$data_menu_href         = strtolower( $custom_section_name );
$data_menu_href         = preg_replace( '/\s/', '-', $relation );
$relation               = get_sub_field( 'relational_group' );
?>

<div class="section feature <?php echo $custom_section_classes; ?>" data-menu="<?php echo $custom_section_name; ?>" data-relation="<?php echo $relation; ?>">
	<div class="container">
		
		<div id="tabs" class="tabs tabs-vertical novarca-tabs is-md">
			
			<?php if ( have_rows( 'features' ) ): ?>
				<ul class="tabs-menus">
					<?php $menu_count = 1;
					
					while ( have_rows( 'features' ) ): the_row();
						
						$active = '';
						if ( $menu_count === 1 ) {
							$active = 'active';
						}
						
						?>
						
						<li class="<?php echo $active; ?>">
							<div class="clip">
								<a href="#tabs-1" data-tab="<?php echo $menu_count; ?>">
								<?php the_sub_field('feature_name'); ?>
								</a>
							</div>
						</li>
						
						<?php $menu_count ++; endwhile; ?>
				</ul>
			<?php endif; ?>
			
			
			<?php if ( have_rows( 'features' ) ): ?>
				<div class="tabs-contents center">
					<?php $tab_count = 1;
					while ( have_rows( 'features' ) ): the_row();
						$active = '';
						if ( $tab_count === 1 ) {
							$active = 'active';
						}
						
						?>
						
						<div class="tabs-content <?php echo $active; ?>" id="tabs-1"
						     data-tab="<?php echo $tab_count; ?>">
								<img src="<?php the_sub_field('feature_image'); ?>"/>
								<div class="feature-content">
									<div class="feature-content-left"></div>
									<div class="feature-content-right"><h4><?php the_sub_field( 'feature_title' ); ?></h4></div>
								</div>
								<?php the_sub_field( 'feature_content' ); ?>
						</div>
						
						<?php $tab_count ++; endwhile; ?>
				</div>
			<?php endif; ?>
		</div>

        <div class="accordion novarca-accordion is-sm">
			<?php if ( have_rows( 'features' ) ): ?>
			
			<?php $accordion_count = 1;
			
			while ( have_rows( 'features' ) ): the_row();
				
				$active = '';
				if ( $accordion_count === 1 ) {
					$active = 'active';
				}
				
				?>
                <div class="accordion-block <?php echo $active; ?>">
                    <div class="accordion-head">
                        <a href="#tabs-1" data-tab="<?php echo $accordion_count; ?>">
                            <span class="approach-name"><?php the_sub_field('feature_name'); ?></span>
                        </a>
                    </div>
                    <div class="accordion-content">
                        <img src="<?php the_sub_field('feature_image'); ?>"/>
                        <div class="feature-content">
                            <div class="feature-content-left"></div>
                            <div class="feature-content-right"><h4><?php the_sub_field( 'feature_title' ); ?></h4></div>
                        </div>
	                    <?php the_sub_field( 'feature_content' ); ?>
                    </div>
                </div>
				<?php $accordion_count++; endwhile; ?>
        </div>
		<?php endif; ?>


    </div>
</div>
