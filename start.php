<?php 
/**
 * Start file for yourkarma
 */
function youractivity_init() {	
elgg_extend_view('profile/owner_block','youractivity/belt', 1); 
}
elgg_register_event_handler('init','system','youractivity_init'); 
	
