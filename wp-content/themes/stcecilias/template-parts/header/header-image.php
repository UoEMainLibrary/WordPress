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
<div class="custom-header">

		<div class="custom-header-media">
			<!--<?php the_custom_header_markup(); ?>-->

			<img class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader1.jpg" />
			<img class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader2.jpg" />
			<img class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader3.jpg" />
			<img class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader4.jpg" />
			<img class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader5.jpg" />
			<img class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader6.jpg" />
			<img class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader7.jpg" />
			<img class="img-responsive" src="<?php echo home_url() ?>/wp-content/themes/stcecilias/assets/images/stcsheader8.jpg" />

		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
