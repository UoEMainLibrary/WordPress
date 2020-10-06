<?php
/*
Plugin Name: Easy Notes
Description: A simple text program
Author: Lucas Persson
Version: 0.1

Copyright (C) 2017  wpLucas

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>
*/


if ( ! defined( 'ABSPATH' ) ) exit;

include_once('actions.php');


function easy_note_css() {
	echo "
	<style type='text/css'>
	#save {
    border: 4px solid #b2b2d8;
    color: white;
    padding: 7px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    border-radius: 20px;
    background: #6666b2;
	float:right;

}

#text  {width: 100%; min-height: 300px;}

.postbox .inside {padding-bottom: 70px;}


</style>
	";
}

add_action( 'admin_head', 'easy_note_css' );
add_action('wp_dashboard_setup', 'easy_notes_widget');
  
function easy_notes_widget() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('easy_notes', 'Easy Notes', 'dashboard_easy_notes_widget');
}
 
function dashboard_easy_notes_widget() {

	if(current_user_can("administrator")){

		global $wpdb;
		
		$wpdb->show_errors();
		
		$table_name = $wpdb->prefix . 'easy_notes';

	    if($wpdb->get_var( "show tables like '$table_name'" ) != $table_name) 
	    {
	        $sql = "CREATE TABLE ".DB_NAME.".". $table_name . " ( 
			`id_note` int(1) NOT NULL,
			`content_note` varchar(50000) NOT NULL
			); ";
	        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	        dbDelta($sql);
			
			$wpdb->insert( 
				$table_name, 
				array( 
					'id_note' => 1, 
					'content_note' =>  'Put your notes here!'
				), 
				array( 
					'%d', 
					'%s' 
				) 
			);
	    }
		
		echo "<form action='". esc_url("index.php") ."' method='post' id='noteContents'> ";
			echo "<textarea rows='' cols='80' id='text' name='content' maxlength='50000'>";

				$results = $wpdb->get_results( "SELECT content_note FROM ".$table_name." WHERE id_note = 1", OBJECT );
				echo esc_textarea((string)$results[0]->content_note);

			echo "</textarea></br>";
			echo "<input name='action' id='save' type='submit' value='Save'/>";
			wp_nonce_field('update_note',"nonce_notes");
		echo "</form>";

	}


}





?>