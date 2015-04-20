<?php
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
session_start();

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