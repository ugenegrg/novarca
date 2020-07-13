<?php
$custom_section_classes = get_sub_field( 'custom_section_classes' );
$custom_section_name    = get_sub_field( 'custom_section_name' );
$relation               = get_sub_field( 'relational_group' );
?>
<div class="<?php echo $custom_section_classes; ?>" data-menu="<?php echo $custom_section_name; ?>" data-relation="<?php echo $relation; ?>">

    <div class="container flex-container">
        <div class="flex-item heading text-center">
            <h2><?php echo get_sub_field( 'consultant_title' ); ?></h2>
        </div>
    </div>

    <div class="container flex-container">
		
		<?php $query = new WP_Query( array(
			'post_type'      => 'novarca-consultant',
			'posts_per_page' => - 1,
			'post_status'    => 'publish'
		) );
		
		if ( $query->have_posts() ) :
			
			while ( $query->have_posts() ) : $query->the_post(); ?>

                <div class="flex-item flex-container consultant-item"
                     style="background-image: url('<?php echo get_field( 'country_borders' ); ?>');">

                    <div class="flex-item no-padding">
                        <img class="flag" src="<?php echo get_field( 'consultant_flag' ); ?>"/>
                        <div><b><?php the_title(); ?></b></div>
                        <p><?php the_field( 'consultant_designation' ); ?></p>
                        <address><?php the_field( 'consultant_address' ); ?></address>
						
						<?php if ( get_field( 'email_address' ) ): ?>
                            <p class="email-address"><a href="mailto:<?php the_field( 'email_address' ); ?>"><i
                                            class="fas fa-envelope"></i> <?php the_field( 'email_address' ); ?></a></p>
						<?php endif; ?>
						
						<?php if ( get_field( 'phone' ) ): ?>
                            <p class="phone"><a href="tel:<?php the_field( 'phone' ); ?>"><i
                                            class="fas fa-phone-alt"></i> <?php the_field( 'phone' ); ?></a></p>
						<?php endif; ?>
                    </div>

                    <div class="flex-item consultant-image no-padding">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail( '', array( 'class' => 'consultant-image' ) );
						} ?>
                    </div>

                </div>
				
				<?php
			endwhile;
		endif;
		?>
    </div>
</div>