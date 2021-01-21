<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<!--<?php
		wp_nav_menu( array( 
			'theme_location' => 'st-cecilias-menu', 
			'container_class' => 'custom-menu-class' ) ); 
		?>-->
<div class="custom-header">
		

		<div class="custom-header-media">
			<!--<?php the_custom_header_markup(); ?>-->

			<img title="Picture of St Cecilia's Hall" class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader1.jpg" />
			<img title="Picture of St Cecilia's Hall" class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader2.jpg" />
			<img title="Picture of St Cecilia's Hall" class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader3.jpg" />
			<img title="Picture of St Cecilia's Hall" class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader4.jpg" />
			<img title="Picture of St Cecilia's Hall" class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader5.jpg" />
			<img title="Picture of St Cecilia's Hall" class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader6.jpg" />
			<img title="Picture of St Cecilia's Hall" class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader7.jpg" />
			<img title="Picture of St Cecilia's Hall" class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader8.jpg" />

		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
<?php
/*get_footer();*/
