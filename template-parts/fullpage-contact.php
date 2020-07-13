<?php
$custom_section_classes = get_sub_field( 'custom_section_classes' );
$custom_section_name    = get_sub_field( 'custom_section_name' );
?>

<div class="section <?php echo $custom_section_classes; ?>" data-menu="<?php echo $custom_section_name; ?>">
    <div class="container">
        <div class="flex-container">

            <div class="flex-item flex-vertical cta-txt">
                <div class="heading text-center-mobile">
                    <h2><?php echo get_sub_field( 'contact_heading' ); ?></h2>
                </div>

                <div class="text-center-mobile">
                    <small class="name"><?php echo get_sub_field( 'contact_name' ); ?></small>
                </div>

                <div class="heading phone text-center-mobile"><a
                            href="tel:<?php echo get_sub_field( 'contact_number' ); ?>"><?php echo get_sub_field( 'contact_number' ); ?></a>
                </div>

                <p class="paragraph text-center-mobile"><?php echo get_sub_field( 'contact_paragraph' ); ?>
                </p>

                <div class="text-center-mobile"><a class="btn primary inverted"
                                                   href="<?php echo get_sub_field( 'contact_button_link' ); ?>"><?php echo get_sub_field( 'contact_button' ); ?></a>
                </div>
            </div>

            <div class="flex-item">
                <img class="is-sm" src="<?php echo get_sub_field( 'contact_image' ); ?>">
            </div>

        </div>
    </div>
    
    <div class="floating-img-wrapper is-md">
        <div class="container">
            <img class="floating-img" src="<?php echo get_sub_field( 'contact_image' ); ?>">
        </div>
    </div>

    <div class="footer-inside">
        <div class="container flex-container">
<!--            <div class="flex-item">--><?php //the_custom_logo(); ?><!--</div>-->
            <div class="flex-item copyright-text">
	            <?php the_field('copyright_text', 'option'); ?>
            </div>
        </div>
    </div>

</div>