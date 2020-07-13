<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novarca
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'novarca' ); ?></a>
	
	<header id="masthead" class="site-header fixed">
		
		<div class="flex-container">
			
			<div class="flex-item site-branding">
				<?php
				the_custom_logo();
				$novarca_description = get_bloginfo( 'description', 'display' );
				if ( $novarca_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $novarca_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
                
                <span class="novarca-menu-toggler"><i class="fas fa-bars"></i></span>
                
			</div><!-- .site-branding -->
			
			<nav id="site-navigation" class="flex-item main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .container-->
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
