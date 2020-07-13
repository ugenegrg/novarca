<?php
$custom_section_classes = get_sub_field( 'custom_section_classes' );
$custom_section_name    = get_sub_field( 'custom_section_name' );
$data_menu_href         = strtolower( $custom_section_name );
$data_menu_href         = preg_replace( '/\s/', '-', $relation );
$relation               = get_sub_field( 'relational_group' );
?>


<div class="section video fp-auto-height" <?php echo $custom_section_classes ?>" data-menu="<?php echo $custom_section_name; ?>">
    
    <div class="video-wrapper">
        <video loop muted autoplay>
            <source src="<?php echo the_sub_field('video_url'); ?>" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="container">
        <div class="floater">
            <?php if ( get_sub_field( 'video_overlay_text' ) ) {
                echo '<h2>' . get_sub_field( 'video_overlay_text' ) . '</h2>';
            } ?>
        </div>
    </div>
</div>