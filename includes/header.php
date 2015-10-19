<?php
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/cms/templates/layouts/global.functions.php');

function do_html_header (
	$pageNumber      ='',
	$subpageNumber   ='',
	$section 		 ='',
	$refText         ='',
	$metaTitle       ='',
	$metaKeywords    ='',
	$metaDescription ='',
	$template        =''
	)
{
?>

HEADER CONTENT HERE

<?php } ?>


<?php

//This goes into the page.

// This is optional based on the website requirements
$pageclass = 'about';

include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');

do_html_header (
	//$pageNumber (unique page number - for menu highlighting)
	'',

	//$subpageNumber (child pages - for sub menu highlighting)
	'',

	//$section (name of the section for menu highlighting)
	'about',

	//$refText (unique ref text to reference the page or group of pages)
	'',

	//$metaTitle
	'About Cladwinds Limited',

	//$metaKeywords
	'Meta Keywords',

	//$metaDescription
	'Meta Description',

	//$template (used to reference different template layouts)
	$pageclass
);

?>