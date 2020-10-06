<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if(isset($_POST["nonce_notes"]))
{
	if($_POST["action"] == "Save") {

		$text = sanitize_textarea_field($_POST['content']);
		
		global $wpdb;
	
		$wpdb->show_errors();
		
		$table_name = $wpdb->prefix . 'easy_notes';
		
		$wpdb->update( 
			$table_name, 
			array( 
				'content_note' => $text
			), 
			array( 'id_note' => 1 ), 
			array( 
				'%s'
			), 
			array( '%d' ) 
		);
	}
}

?>
