<div class="section singleparallax <?php echo get_sub_field( 'custom_section_classes' ); ?>" data-menu="<?php the_sub_field( 'custom_section_name' ); ?>">
	
	<div id="scene" class="parallax-container">

		<div class="is-sm p-t-15 p-b-15 p-l-15 p-r-15">
			<?php if ( get_sub_field( 'single_parallax_text' ) ) {
				echo '<h2>' . get_sub_field( 'single_parallax_text' ) . '</h2>';
			} ?>
			
			<?php if ( get_sub_field( 'single_parallax_sub_text' ) ) {
				echo '<p>' . get_sub_field( 'single_parallax_sub_text' ) . '</p>';
			} ?>
			
			<?php if ( get_sub_field( 'single_parallax_button' ) ) {
				echo '<a class="btn primary" href="' . get_sub_field( 'single_parallax_button_link' ) . '">' . get_sub_field( 'single_parallax_button' ) . '</a>';
			} ?>
			
			<?php if ( get_sub_field( 'single_parallax_button_2' ) ) {
				echo '<a class="btn primary" href="' . get_sub_field( 'single_parallax_button_2_link' ) . '">' . get_sub_field( 'single_parallax_button_2' ) . '</a>';
			} ?>

			<img src="<?php echo get_sub_field( 'single_parallax_image' ); ?>" class="m-t-30">
		</div>


		<div class="is-md">
			<?php if ( get_sub_field( 'single_parallax_image' ) ) { ?>
				<div data-stellar-ratio="0.3" data-stellar-horizontal-offset="40" data-stellar-vertical-offset="0"
					class="parallax"
					style="background-image: url('<?php echo get_sub_field( 'single_parallax_image' ); ?>');" data-parallax="2">
				</div>
			<?php } ?>
		
			<div data-stellar-ratio="0.1" data-stellar-horizontal-offset="200" data-stellar-vertical-offset="250"
		class="container">
				<div class="floater">

					<?php if ( get_sub_field( 'single_parallax_text' ) ) {
						echo '<h2>' . get_sub_field( 'single_parallax_text' ) . '</h2>';
					} ?>

					<?php if ( get_sub_field( 'single_parallax_sub_text' ) ) {
						echo '<p>' . get_sub_field( 'single_parallax_sub_text' ) . '</p>';
					} ?>

					<?php if ( get_sub_field( 'single_parallax_button' ) ) {
						echo '<a class="btn primary inverted" href="' . get_sub_field( 'single_parallax_button_link' ) . '">' . get_sub_field( 'single_parallax_button' ) . '</a>';
					} ?>
					
					<?php if ( get_sub_field( 'single_parallax_button_2' ) ) {
						echo '<a class="btn primary inverted" href="' . get_sub_field( 'single_parallax_button_2_link' ) . '">' . get_sub_field( 'single_parallax_button_2' ) . '</a>';
					} ?>
					
				</div>
			</div>
		</div>
		
		
	
	</div>
</div>