<?php
//AUTO COPYRIGHT NOTICE
##################################################################################
	function auto_copyright($year = 'auto'){
		if(intval($year) == 'auto'){ $year = date('Y'); }
		if(intval($year) == date('Y')){ echo intval($year); }
		if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
		if(intval($year) > date('Y')){ echo date('Y'); }
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>			<html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->


	<!-- TODO: Unique Page Titles - PHP -->
	<!-- TODO: Generic META Data - PHP -->
	<!-- TODO: Ask Client for Unique META Data- PHP -->

	<title><?php echo $metaTitle; ?></title>

	<?php if ($metaKeywords == "Meta Keywords") { ?>
	<meta name="keywords" content="enter, your, keywords">
	<?php } else { ?>
	<meta name="keywords" content="<? echo $metaKeywords; ?>">

	<?php } if ($metaDescription == "Meta Description") { ?>
	<meta name="description" content="Enter a generic description here...">
	<?php } else { ?>
	<meta name="description" content="<? echo $metaDescription; ?>">
	<?php } ?>

	<meta name="Rating" content="General">
	<meta name="robots" content="all">
	<meta name="revisit-after" content="30 Days">
	<meta name="author" content="Amasci Creative Limited | www.amasci.co.uk | info@amasci.co.uk | 01908 668 665">
	<meta name="dcterms.dateCopyrighted" content="&copy; <?php echo date('Y'); ?>" />
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

	<!-- Mobile Specific Meta Data
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- TODO: Complete the HUMANS File -->
	<!-- HUMANS
	================================================== -->
	<link type="text/plain" rel="author" href="/humans.txt" /

	<!-- CSS
	================================================== -->

	<!-- Main Styles -->

	<!--[if ! lt IE 8]><!-->
		<!--Stylesheets for browsers other than lower than Internet Explorer 8 -->
		<?php  if($host == 'localhost') { ?>
		<link href="/assets/css/style.min.css" rel="stylesheet" type="text/css" media="screen, projection">
		<?php } else { ?>
		<link href="/assets/css/style.min.<?php echo filectime($_SERVER['DOCUMENT_ROOT'].'/assets/css/style.min.css'); ?>.css" rel="stylesheet" type="text/css" media="screen, projection">
		<?php } ?>
	<!--<![endif]-->


	<!--[if lt IE 8]>
		<link rel="stylesheet" href="/assets/css/universal-IE7.min.css" media="screen, projection">
	<![endif]-->


	<!-- JAVASCRIPTS
	================================================== -->

	<!-- JS Files via Fetch -->
	<!--
	START LIST OF FILES

	Respond
	A fast & lightweight Polyfill for min/max-width CSS3 Media Queries (for IE 6-8, and more)

	MODERNIZR - BASED ON REQUIREMENTS AND ADD HMYL5 SHIV

	END LIST OF FILES
	-->

	<script type="text/javascript" src="/assets/js/modernizr.min.js"></script>

	<!--[if lt IE 9]>
		<script type="text/javascript" src="/assets/js/respond.min.js"></script>
	<![endif]-->



	<!-- TODO: Google Analytics Code to be recreated from account and look into moving to the footer?  -->
	<!--GOOGLE ANALYTCIS-->
	<!--END GOOGLE ANALYTCIS-->


	<!-- Favicons
	================================================== -->
	<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

	<link rel="apple-touch-icon" sizes="57x57" href="/assets/img/touch/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/img/touch/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/img/touch/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/img/touch/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/img/touch/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/img/touch/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/touch/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/img/touch/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="/assets/img/touch/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="/assets/img/touch/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/assets/img/touch/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/assets/img/touch/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/assets/img/touch/favicon-32x32.png" sizes="32x32">

	<!-- Win8 tile -->
	<meta name="msapplication-TileColor" content="#c6982d">
	<meta name="msapplication-TileImage" content="/assets/img/touch/mstile-144x144.png">
	<meta name="application-name" content="name" />

	<!-- IE11 tiles -->
	<meta name="msapplication-square70x70logo" content="/assets/img/touch/mstile-70x70.png"/>
	<meta name="msapplication-square150x150logo" content="/assets/img/touch/mstile-150x150.png"/>
	<meta name="msapplication-wide310x150logo" content="/assets/img/touch/mstile-310x150.png">


	<!-- Gridset App Temp Files
	================================================== -->
	<!--<link href="https://get.gridsetapp.com/21865/" rel="stylesheet" />
	<script src="https://get.gridsetapp.com/21865/overlay/"></script>-->


</head>

<body>
<div class="wrapper">
	<!--[if lt IE 8]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://whatbrowser.org/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header role="banner">
		<a href="/" title="Homepage"><img src="img/logo.png" alt="Logo" class="logo"></a>
	</header>

	<div class="terry">
		Terry
	</div>


	<?php $current[$sectionNumber] = 'class="current"';	?>
	<nav id="nav" class="main-menu" role="navigation">
		<ul>
			<li><a href="#search" accesskey="1" tabindex="1" class="search-link icon-search m-hide t-hide d-show"><span>Search</span></a></li>
			<li><a href="/" <?php echo $current[1] ?>>Home</a></li>
			<li><a href="" <? echo $current[2] ?>>Item</a></li>
			<li><a href="" <?php echo $current[3] ?>>Item</a></li>
			<li><a href="" <?php echo $current[4] ?>>Item</a></li>
			<li><a href="" <?php echo $current[5] ?>>Item</a></li>
			<li><a href="" <?php echo $current[6] ?>>Contact</a></li>
		</ul>
	</nav>



	<div class="container">
		<main role="main" class="main-copy">
				<img src="/images/logo.svg" alt="Watfeilds Limited Logo" title="Watfeilds Limited Logo" class="logo">
				<!--<img src="/images/logo.png" class="logo" alt="Watfeilds Limited Logo">-->
				<h1 class="flush-bottom">Watfields Full Website Coming Soon</h1>
				<h2>Precision Engineering Specialists in Sheffield and Yorkshire</h2>

				<p>Watfields Ltd is a family run Precision Engineering company born out of genuine passion for production manufacturing and all that it entails. Our main services include Turning, milling, CAD drawing, reverse engineering, Material and product sourcing, Design and development, Project Management, Sub-contract work and machining only services. We are best suited to Job and batch production runs up to 1000 pieces however we are happy to quote on all prospective work.</p>

					<p>Our aim is to grow our business internationally by providing quality products and services at great value, whilst meeting and exceeding customer expectations and by building positive, lasting relationships.</p>

					<p>This is a paragraph of text and this is to test if a bold item using <strong>strong</strong> is bold and if a bold item using <b>b (bold)</b> is bold. Also a test to see if <em>italic items using em</em> are italic and also the same for if <i>used as (i)</i></p>

					<ul>
						<li>A list item</li>
						<li>A longer list item</li>
						<li>A longer one still with CAD drawing, reverse engineering, Material and product sourcing, Design</li>
						<li>Another item with a sub list
							<ul>
								<li>An indented list item</li>
								<li>Discuss Your Precision Engineering Requirements</li>
								<li>This is a list item of text</li>
							</ul>
						</li>
					</ul>

					<p>Our aim is to grow our business internationally by providing quality products and services at great value, whilst meeting and exceeding customer expectations and by building positive, lasting relationships.</p>

					<p><a href="" class="btn-base">Go on click me</a></p>

					<h2>Discuss Your Precision Engineering Requirements</h2>

					<p class="contact"><span class="large"><i class="icon-phone"></i> 0114 433 30 13</span></p>
					<p class="contact"><span class="large"><a href="mailto:enquiries@watfields.co.uk"><i class="icon-email"></i> enquiries@watfields.com</a></span></p>
					<p class="address"><i class="icon-address large"></i></p>
					<p class="contact">Unit 6 Clayfield Road<br>
					Platts Common Industrial Estate<br>
					Hoyland<br>
					Barnsley<br>
					S74 9TL</p>
		</main>

		<aside role="complementary">
				<!--<img src="images/main.jpg" alt="Watfields Example Engineering Images" class="img-center">-->

				<h2>Get Updates</h2>
				<p class="flush-bottom">Keep up to date with Watfields now and in the future. Simply fill in your details and we'll let you know when we launch our new site.</p>

				<form action="http://amasci.createsend.com/t/y/s/cjlkud/" method="post" class="signup-form">
					<p>
						<label for="fieldName">Name</label><br />
						<input id="fieldName" name="cm-name" type="text" placeholder="Full Name" />
						<label for="fieldEmail">Email</label><br />
						<input id="fieldEmail" name="cm-cjlkud-cjlkud" type="email" placeholder="Email Address"  required />
						<button type="submit" class="subscribe">Sign me up</button>
					</p>
				</form>

				<p>
					<a href="https://Twitter.com/watfields" title="Follow us on Twitter" target="_blank"><i class="icon-twitter icon-social twitter"></i></a>
					<a href="http://www.facebook.com/watfields.ltd" title="Follow us on Facebook" target="_blank"><i class="icon-facebook icon-social facebook"></i></a>
				</p>
	</aside>
	</div>
</div>



<footer role="contentinfo">
	<div class="container">
		<p>Watfields Limited are registered at Companies House England and Wales<br>
		Company Registration Number. 08138894</p>

		<p>Registered Address.13 Seymore Road, Aston, Sheffield, South Yorkshire, S26 2DG</p>

		<p>All Content &copy; Watfields Limited<br>
		Website &copy; <a href="http://www.amasci.co.uk" target="_blank" title="visit Amasci Creative Limited - Web Solutons, Graphic Design and much more."  class="textFooterAmasci">Amasci Creative Limited, website design Milton Keynes</a> <?php auto_copyright('2014'); ?></p>
		</p>
	</div>
</footer>


<!-- JAVASCRIPTS
================================================== -->

<!-- TODO: Replace JQuery with CDN and Local Fallback. Update Version number as required -->
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/jquery.min.js"><\/script>')</script>-->

<script type="text/javascript" src="/assets/js/functions.min.js"></script>

<!--[if IE 7]>
<script>
$.fn.equalheight = function() { return this };
</script>
<![endif]-->

<!-- TODO: Google Analytics Code to be created from account -->
<!--GOOGLE ANALYTCIS-->
<!--END GOOGLE ANALYTCIS-->


<!-- TODO: REMOVE GRIDSET JS COMMENTS -->
<!-- Gridset App Temp Files
================================================== -->
<!-- <script src="https://get.gridsetapp.com/21997/overlay/"></script> -->

</body>
</html>