<?php 
$custom_section_classes = get_sub_field( 'custom_section_classes' );
$custom_section_name    = get_sub_field( 'custom_section_name' );

$layout = get_sub_field('image_block_layout' );

if( $layout === "layout1" ) { ?>

    <div class="section imageblock explore layout-old" <?php echo $custom_section_classes; ?>" data-menu="<?php echo $$custom_section_name; ?>">
        <div class="container">
            <div class="heading text-center">
                <h2><?php echo get_sub_field( 'image_block_heading' ); ?></h2>
            </div>

            <div class="flex-container">
                <div class="flex-item hover-up">
                    <div class="imageblock-bg" style="background-image: url('<?php echo get_sub_field( 'image_block_left' ); ?>');">
                        <a href="<?php echo esc_url( get_sub_field( 'image_block_left_link' ) ); ?>">
                            <div class="head-subhead heading small">
                                <h2><?php echo get_sub_field( 'image_block_left_head' ); ?></h2>
                                <p><?php echo get_sub_field( 'image_block_left_subhead' ); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="flex-item hover-up" >
                    <a href="<?php echo esc_url( get_sub_field( 'image_block_right_link' ) ); ?>">
                        <div class="imageblock-bg" style="background-image: url('<?php echo get_sub_field( 'image_block_right' ); ?>');">
                            <div class="head-subhead heading small">
                                <h2><?php echo get_sub_field( 'image_block_right_head' ); ?></h2>
                                <p><?php echo get_sub_field( 'image_block_right_subhead' ); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php } elseif ( $layout === "layout2" ) { ?>

    <div class="section imageblock explore layout-new" <?php echo $custom_section_classes; ?>" data-menu="<?php echo $$custom_section_name; ?>">
        
        <div class="clip-triangle"></div>

        <div class="container">
            <div class="heading text-center">
                <h2><?php echo get_sub_field( 'image_block_heading' ); ?></h2>
            </div>

            <div class="flex-container">
                <div class="flex-item hover-up">
                    <h2><?php echo get_sub_field( 'image_block_left_head' ); ?></h2>
                    <div class="imageblock-bg" style="background-image: url('<?php echo get_sub_field( 'image_block_left' ); ?>');">
                    </div> 

                    <div class="head-subhead heading small">
                        <p><?php echo get_sub_field( 'image_block_left_subhead' ); ?></p>
                    </div>
                    
                    <a class="btn primary m-t-30" href="<?php echo esc_url( get_sub_field( 'image_block_left_link' ) ); ?>">More</a>

                </div>
                
                <div class="flex-item hover-up" >
                    <h2><?php echo get_sub_field( 'image_block_right_head' ); ?></h2>
                    <div class="imageblock-bg" style="background-image: url('<?php echo get_sub_field( 'image_block_right' ); ?>');">
                    </div>

                    <div class="head-subhead heading small">
                        <p><?php echo get_sub_field( 'image_block_right_subhead' ); ?></p>
                    </div>

                    <a class="btn primary m-t-15" href="<?php echo esc_url( get_sub_field( 'image_block_right_link' ) ); ?>">More</a>
                    
                </div>
            </div>
        </div>
    </div>

<?php
} 