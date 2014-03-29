<?php
include("../main-functions.php");

do_html_header (
	//$pageNumber (unique page number - for menu highlighting)
	'',

	//$subpageNumber (child pages - for sub menu highlighting)
	'',

	//$sectionNumber (likely same as page number for small sites but can be used to reference whole sections)
	'',

	//$refText (unique ref text to reference the page or group of pages)
	'',

	//$metaTitle
	'404 Error"',

	//$metaKeywords
	'Meta Keywords',

	//$metaDescription
	'Meta Description',

	//$template (used to reference different template layouts)
	''
);

?>

    <h1>404 Error</h1>

	<h2>Sorry page not found</h2>

	 <p><b>Unfortunately, we could not find the page you have requested.</b></p>
	 <p>This might be because :</p>
	  <ul class="square">
	  	<li>You may have typed the web address incorrectly. Please check the web address and spelling ensuring that it does not contain unwanted characters or spaces.</li>
		<li>It is possible that the page you have requested may have been moved, updated or deleted.</li>
	</ul>

	<p>Please try navigating  again from our <a href="index.php" title="homepage">homepage</a></p>

	<br class="clear">

<?php
	do_html_footer();
?>
