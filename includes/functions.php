<?php
//MODIFIED HEADER DATE
##################################################################################
function set_headerdate() {
	$format = "%a, %d %b %Y %H:%M:%S %z";

	// First check if there is a blog post date
	if (function_exists('perch_blog_post_field') && function_exists('perch_get') && perch_blog_post_field(perch_get('s'), 'postDateTime', true)) {
		$result = perch_blog_post_field(perch_get('s'), 'postDateTime', true);
		header("Last-Modified: ".strftime($format, strtotime($result)));
	}

	//If a list and detail page then get the date passed into the template/edited.
	else if (class_exists('PerchSystem') && PerchSystem::get_var('modified_date')) {
		header("Last-Modified: ".strftime($format, strtotime(PerchSystem::get_var('modified_date'))));
	}

	// If not then is there a perch modified date?
	else if(function_exists('perch_page_modified') && perch_page_modified(array('format' => $format), true)) {
		header("Last-Modified: ".perch_page_modified(array('format' => $format), true));
	}

	// Finally if not get the modified time-stamp of the actual file
	else {
		header("Last-Modified: ".strftime($format, filemtime($_SERVER['SCRIPT_FILENAME'])));
	}
}

//AUTO COPYRIGHT NOTICE
##################################################################################
function auto_copyright($year = 'auto'){
	if(intval($year) == 'auto'){ $year = date('Y'); }
	if(intval($year) == date('Y')){ echo intval($year); }
	if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
	if(intval($year) > date('Y')){ echo date('Y'); }
}
?>