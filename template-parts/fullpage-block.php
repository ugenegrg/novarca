<?php
$custom_section_classes = get_sub_field( 'custom_section_classes' );
$custom_section_name    = get_sub_field( 'custom_section_name' );
$data_menu_href         = strtolower( $custom_section_name );
$data_menu_href         = preg_replace( '/\s/', '-', $relation );
$relation               = get_sub_field( 'relational_group' );
?>

<div class="section fullpage-parts block <?php echo $custom_section_classes; ?>" data-menu="<?php echo $custom_section_name; ?>" data-relation="<?php echo $relation; ?>">
    <div class="container">
        <div class="flex-container">
			<?php $align = ( get_sub_field( 'block_image_alignment' ) == "Left" ) ? "left" : "right"; ?>
            <div class="flex-item image <?php echo $align; ?>">
                <img src="<?php echo get_sub_field( 'block_image' ); ?>">
            </div>
            <div class="flex-item content right">
                <div class="heading small"><h2><?php echo get_sub_field( 'block_heading' ); ?></h2></div>
                <div class="heading"><h2><?php echo get_sub_field( 'block_subheading' ); ?></h2></div>
                <p class="paragraph"><?php echo get_sub_field( 'block_paragraph' ); ?></p>
				
				<?php
				if ( get_sub_field( 'block_show_special_relation' ) ) { // case of special relation buttons
					
					$special_relation_values = get_sub_field( 'block_special_relation' );
					
					// for button 1
                    if( $special_relation_values['block_special_relation_button_1'] ) {
	                    printf( '<a class="btn primary relational first active" data-relation-hide="%1s" href="javscript:void(0);">%2s</a>', $special_relation_values['block_special_relation_button_2_class'], $special_relation_values['block_special_relation_button_1'] );
                    }
					
					// for button 2
                    if( $special_relation_values['block_special_relation_button_2'] ) {
	                    printf( '<a class="btn primary relational second" data-relation-hide="%1s" href="javscript:void(0);">%2s</a>', $special_relation_values['block_special_relation_button_1_class'], $special_relation_values['block_special_relation_button_2'] );
                    }
					
					
				} else { // case of simple link buttons
					
					$simple_button_values = get_sub_field( 'block_simple_links' );
					
					// for button 1
					if ( $simple_button_values['block_button_1'] ) {
						printf( '<a class="btn primary" href="%s">%2s</a>', $simple_button_values['block_button_1_link'], $simple_button_values['block_button_1'] );
					}
					
					// for button 2
					if ( $simple_button_values['block_button_2'] ) {
						printf( '<a class="btn primary" href="%s">%2s</a>', $simple_button_values['block_button_2_link'], $simple_button_values['block_button_2'] );
					}
					
				}
				?>

            </div>
        </div>
    </div>
</div>