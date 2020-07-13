<div class="section whoweare gradient parallax" <?php the_sub_field( 'custom_section_classes' ); ?>" data-menu="<?php the_sub_field( 'custom_section_name' ); ?>">

    <div id="scene" class="parallax-container">
		
		<?php if ( get_sub_field( 'parallax_image_1' ) ) { ?>
            <div data-stellar-ratio="0.3" data-stellar-horizontal-offset="40" data-stellar-vertical-offset="0"
                 class="parallax cloud"
                 style="background-image: url('<?php echo get_sub_field( 'parallax_image_1' ); ?>');" data-parallax="2">
            </div>
		<?php } ?>
		
		<?php if ( get_sub_field( 'parallax_image_2' ) ) { ?>
            <div data-stellar-ratio="0.5" data-stellar-horizontal-offset="200" data-stellar-vertical-offset="0"
                 class="parallax mountain"
                 style="background-image: url('<?php echo get_sub_field( 'parallax_image_2' ); ?>');" data-parallax="2">
            </div>
		<?php } ?>
        
        <div data-stellar-ratio="0.1" data-stellar-horizontal-offset="200" data-stellar-vertical-offset="250"
             class="container">
            <div class="floater">
				
				<?php if ( get_sub_field( 'parallax_text' ) ) {
					echo '<h2>' . get_sub_field( 'parallax_text' ) . '</h2>';
				} ?>
				
				<?php if ( get_sub_field( 'parallax_sub_text' ) ) {
					echo '<p>' . get_sub_field( 'parallax_sub_text' ) . '</p>';
				} ?>
				
				<?php if ( get_sub_field( 'parallax_button_1' ) ) {
					echo '<a class="btn primary inverted" href="' . get_sub_field( 'parallax_button_1_link' ) . '">' . get_sub_field( 'parallax_button_1' ) . '</a>';
				} ?>
				
				<?php if ( get_sub_field( 'parallax_button_2' ) ) {
					echo '<a class="btn primary inverted" href="' . get_sub_field( 'parallax_button_2_link' ) . '">' . get_sub_field( 'parallax_button_2' ) . '</a>';
				} ?>

            </div>
        </div>

    </div>
</div>