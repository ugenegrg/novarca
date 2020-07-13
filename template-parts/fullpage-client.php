<div class="section <?php the_sub_field( 'custom_section_classes' ); ?>" data-menu="<?php the_sub_field( 'custom_section_name' ); ?>">
	<div class="container">
        <div class="flex-container">
            <div class="flex-item text-center">
                <div class="heading">
                    <h2><?php echo get_sub_field( 'client_heading' ); ?></h2>
                </div>
	
	            <?php if ( get_sub_field( 'client_option' ) == 'image' ) { ?>
                    <img src="<?php echo get_sub_field( 'client_image' ) ?>">
	            <?php } else { ?>
                    <p>Gallery not implemented yet.</p>
	            <?php } ?>

                <hr class="hr">
            </div>
        </div>
	</div>
</div>