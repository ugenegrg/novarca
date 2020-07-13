<?php
$custom_section_classes = get_sub_field( 'custom_section_classes' );
$custom_section_name    = get_sub_field( 'custom_section_name' );


$data_menu_href = strtolower( $custom_section_name );
$data_menu_href = preg_replace( '/\s/', '-', $relation );

$relation = get_sub_field( 'relational_group' );

?>

<div class="<?php echo $custom_section_classes; ?>" data-menu="<?php echo $custom_section_name; ?>" data-relation="<?php echo $relation; ?>">
    <div class="container">
        <div class="flex-container">
            <div class="flex-item text-center">
				<?php if ( get_sub_field( 'contact_form_image' ) ): ?>
                    <img src="<?php echo get_sub_field( 'contact_form_image' ); ?>">
				<?php endif; ?>
				<?php if ( get_sub_field( 'contact_form_image_text' ) ): ?>
					<?php echo get_sub_field( 'contact_form_image_text' ); ?>
				<?php endif; ?>
            </div>
            <div class="flex-item">
				<?php if ( get_sub_field( 'contact_form_editor' ) ): ?>
					<?php echo get_sub_field( 'contact_form_editor' ); ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>