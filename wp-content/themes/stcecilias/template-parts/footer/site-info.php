<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>" class="imprint">
		<?php
			/* translators: %s: WordPress */
		printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' );
		?>
	</a>-->

		<a href="http://www.ed.ac.uk/about/website/privacy" title="Privacy and Cookies Link" target="_blank">Privacy &amp; Cookies</a>
		&nbsp;&nbsp;
		<a href="<?php get_site_url() ?>/accessibility-statement" title="Website Accessibility Link" target="_blank">Accessibility</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Unless explicitly stated otherwise, all material is copyright © 2020
		<a href="http://www.ed.ac.uk" title="University of Edinburgh Home" target="_blank">University of Edinburgh</a>.


</div><!-- .site-info -->
