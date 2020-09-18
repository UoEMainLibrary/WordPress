<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 * 
 * @author Ben Parkes, University of Edinburgh
 */

?>
<div class="site-branding">

	<div class="wrap">

		<!-- Home page logo image to fit with larger header space --> 
		<?php if ( is_front_page() ) : ?>
			<div class="logo-container">
				<!-- <a href="<?php echo home_url() ?>">
					<img class="custom-logo" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/WebsiteBannerWhite.png">
				</a> -->
			</div>
		<!-- end of home page logo --> 

		<!-- Full site logo image to fit with smaller header space --> 
		<?php else : ?>
			<div class="logo-container" id="full-site-logo">
				<!-- <a href="<?php echo home_url() ?>">
					<img class="custom-logo" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/WebsiteBannerWhite.png">
				</a> -->
			</div>
		<?php endif; ?>
		<!-- end of full site logo --> 


		<!-- BOILERPLATE IMPLEMENTATION REMOVED, IGNORE -->
		<!--<?php the_custom_logo(); ?>-->

		<!--<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div> .site-branding-text -->
		<!-- END OF BOILERPLATE IMPLEMENTATION -->


		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
			<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?>
				<span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span>
			</a>
		<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
<!--<div class="branding-background"></div>-->


<!-- Containers for funding and partner logos -->
<!-- Only display funding logos on front page -->
<?php if ( is_front_page() ) : ?>
<div class="branding-logos-background"></div>
<div class="branding-logos">
	<div id="flogo1" class="funding-logo" style="background-image: url(<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/logos/uoelogo.png)"></div>
	<div id="flogo2" class="funding-logo" style="background-image: url(<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/logos/hlflogo.png)"></div>
	<div id="flogo3" class="funding-logo" style="background-image: url(<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/logos/amlogo.png)"></div>
	<div id="flogo4" class="funding-logo" style="background-image: url(<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/logos/mgslogo.png)"></div>
	<div id="flogo5" class="funding-logo" style="background-image: url(<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/logos/mgshmiclogo.png)"></div>
</div>
<!-- Don't display funding logos for rest of site --> 
<?php endif; ?>
<!-- end of containers for funding and partner logos -->


