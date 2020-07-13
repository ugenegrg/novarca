<?php
$custom_section_classes = get_sub_field( 'custom_section_classes' );
$custom_section_name    = get_sub_field( 'custom_section_name' );

$background = '';
if( "" != get_sub_field('background_image') ) {
    $background .= 'background-image: url(' . get_sub_field('background_image') . ');';
}

if ( "" != get_sub_field('background_color') ) {
	$background .= 'background-color: ' . get_sub_field('background_color');
}
?>

<div class="section simple <?php echo $custom_section_classes ?>" data-menu="<?php echo $custom_section_name; ?>" style="<?php echo $background; ?>">
    <div class="container">
        <div class="simple-content">
            <div class="flex-container">
                <div class="flex-item">
	                <?php the_sub_field( 'simple_content' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>