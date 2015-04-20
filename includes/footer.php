<?php
function do_html_footer()
{
?>

FOOTER CONTENT

<?php
}

//AUTO COPYRIGHT NOTICE
##################################################################################
	function auto_copyright($year = 'auto') {
		if(intval($year) == 'auto'){ $year = date('Y'); }
		if(intval($year) == date('Y')){ echo intval($year); }
		if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
		if(intval($year) > date('Y')){ echo date('Y'); }
	}
?>
