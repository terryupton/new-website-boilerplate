<?php
#Filename based cache busting made easy
#http://heatherevens.me.uk/2013/07/01/filename-based-cache-busting-made-easy/
##################################################################################
function cachifyFileName($fileName)
{
  if (file_exists($fileName))
  {
  $lastModified = filemtime($fileName);
  $pathParts = pathinfo($fileName);
  $fileName = $pathParts['dirname'].'/'.$pathParts['filename'].'.'.$lastModified.'.'.$pathParts['extensions'];
  }
  return $fileName;
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
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


  <!-- CSS
  ================================================== -->

  <!-- Main Styles -->

  <!--[if ! lt IE 8]><!-->
	<!--Stylesheets for browsers other than lower than Internet Explorer 8 -->
	<!-- <link href="/assets/css/style.min.<?php echo filectime($_SERVER['DOCUMENT_ROOT'].'/assets/css/style.min.css'); ?>.css" rel="stylesheet" type="text/css" media="screen, projection"> -->

	<link href="/assets/css/style.min.css" rel="stylesheet" type="text/css" media="screen, projection">
  <!--<![endif]-->


  <!--[if lt IE 8]>
	<link rel="stylesheet" href="/assets/css/universal-IE7.min.css" media="screen, projection">
  <![endif]-->


  <!-- JAVASCRIPTS
  ================================================== -->

  <!-- JS Files via Fetch -->
  <!--
  START

  Respond
  A fast & lightweight Polyfill for min/max-width CSS3 Media Queries (for IE 6-8, and more)

  HTML5 Shiv
  The HTML5 Shiv enables use of HTML5 sectioning elements in legacy Internet Explorer and provides basic HTML5 styling for Internet Explorer 6-9, Safari 4.x (and iPhone 3.x), and Firefox 3.x.

  JQuery.min
  The latest minified version of JQuery

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

  <link rel="apple-touch-icon" href="/img/touch/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" href="/img/touch/apple-touch-icon-76x76-precomposed.png" sizes="60x60" />
  <link rel="apple-touch-icon" href="/img/touch/apple-touch-icon-72x72-precomposed.png" sizes="72x72" />
  <link rel="apple-touch-icon" href="/img/touch/apple-touch-icon-76x76-precomposed.png" sizes="76x76" />
  <link rel="apple-touch-icon" href="/img/touch/apple-touch-icon-114x114-precomposed.png" sizes="114x114" />
  <link rel="apple-touch-icon" href="/img/touch/apple-touch-icon-114x114-precomposed.png" sizes="120x120" />
  <link rel="apple-touch-icon" href="/img/touch/apple-touch-icon-144x144-precomposed.png" sizes="144x144" />
  <link rel="apple-touch-icon" href="/img/touch/apple-touch-icon-152x152-precomposed.png" sizes="152x152" />

  <meta name="msapplication-TileImage" content="/img/touch/apple-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#333333">


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



  <?php $current[$sectionNumber] = 'class="current"'; ?>
  <nav id="nav" class="main-menu" role="navigation">
	<ul>
	  <li><a href="#search" accesskey="1" tabindex="1" class="search-link icon-search m-hide t-hide d-show"><span>Search</span></a></li>
	  <li><a href="/" accesskey="2" tabindex="2" <?php echo $current[1] ?>>Home</a></li>
	  <li><a href="" accesskey="3" tabindex="3" <? echo $current[2] ?>>Item</a></li>
	  <li><a href="" accesskey="4" tabindex="4" <?php echo $current[3] ?>>Item</a></li>
	  <li><a href="" accesskey="5" tabindex="5" <?php echo $current[4] ?>>Item</a></li>
	  <li><a href="" accesskey="6" tabindex="6" <?php echo $current[5] ?>>Item</a></li>
	  <li><a href="" accesskey="7" tabindex="7" <?php echo $current[6] ?>>Contact</a></li>
	</ul>
  </nav>



  <div class="container">
	<main role="main" class="main-copy">
	  <h1>Frontent Styleguide Template</h1>

	  <p>This styleguide template contains many common HTML elements. You can use it to demonstrate the look of your designs across a variety of content.</p>

	  <p>If you'd like to contribute, make your changes to both the <a href="https://github.com/bryanbraun/frontend-styleguide/blob/master/README.md">markdown</a> and <a href="https://github.com/bryanbraun/frontend-styleguide/blob/master/styleguide.html">HTML</a> files. If the elements won't render in markdown (like forms, for example), you can just add them to the final section of <a href="https://github.com/bryanbraun/frontend-styleguide/blob/master/styleguide.html">styleguide.html</a>.<p>

	  <hr />

	  <h1 id="headings">Headings</h1>

	  <h1>Heading 1</h1>
	  <h2>Heading 2</h2>
	  <h3>Heading 3</h3>
	  <h4>Heading 4</h4>
	  <h5>Heading 5</h5>
	  <h6>Heading 6</h6>

	  <hr />

	  <h1 id="headings">Headings with Text</h1>

	  <h1>Heading 1</h1>
	  <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

	  <h2>Heading 2</h2>
	  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
	  <h3>Heading 3</h3>
	  <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
	  <h4>Heading 4</h4>
	  <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
	  <h5>Heading 5</h5>
	  <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
	  <h6>Heading 6</h6>
	  <p>Lorem ipsum dolor sit amet, adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

	  <hr />

	  <h1 id="paragraph">Paragraph</h1>

	  <p>Lorem ipsum dolor sit amet, <a href="#" title="This is a hyperlink">this is a hyperlink</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
	  <p>Lorem ipsum dolor sit amet, <strong>this text is strong</strong> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
	  <p>Lorem ipsum dolor sit amet, <em>this text is emphasized</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.
	  <p><img alt="Placeholder Image and Some Alt Text" src="http://placehold.it/350x150" title="A title element for this placeholder image."></p>
	  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy.</p>

	  <blockquote>
		"This is a blockquote. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl." <br />-Author
	  </blockquote>

	  <h1 id="text-elements"> Text Elements</h1>

	  <p>The <a href="#">a element</a> example</p>
	  <p>The <abbr>abbr element</abbr> and an <abbr title="Abbreviation">abbr</abbr> element with title examples</p>
	  <p>The <acronym title="A Cowboy Ran One New York Marathon">ACRONYM</acronym> element example
	  <p>The <b>b element</b> example</p>
	  <p>The <cite>cite element</cite> example</p>
	  <p>The <code>code element</code> example</p>
	  <p>The <em>em element</em> example</p>
	  <p>The <del>del element</del> example</p>
	  <p>The <dfn>dfn element</dfn> and <dfn title="Title text">dfn element with title</dfn> examples</p>
	  <p>The <i>i element</i> example</p>
	  <p>The <ins>ins element</ins> example</p>
	  <p>The <kbd>kbd element</kbd> example</p>
	  <p>The <mark>mark element</mark> example</p>
	  <p>The <q>q element</q> example</p>
	  <p>The <q>q element <q>inside</q> a q element</q> example</p>
	  <p>The <s>s element</s> example</p>
	  <p>The <samp>samp element</samp> example</p>
	  <p>The <small>small element</small> example</p>
	  <p>The <span>span element</span> example</p>
	  <p>The <strong>strong element</strong> example</p>
	  <p>The <sub>sub element</sub> example</p>
	  <p>The <sup>sup element</sup> example</p>
	  <p>The <u>u element</u> example</p>
	  <p>The <var>var element</var> example</p>

	  <hr />

	  <h1 id="monospace">Monospace / Preformatted</h1>
	  <p>Code block wrapped in "pre" and "code" tags</p>
	  <pre><code>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</code></pre>
	  <p>Monospace Text wrapped in "pre" tags</p>
	  <pre><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p></pre>

	  <hr />

	  <h1 id="list_types">List Types</h1>

	  <h3>Ordered List</h3>
	  <ol>
		<li>List Item 1</li>
		<li>List Item 2</li>
		<li>List Item 3</li>
	  </ol>

	  <h3>Unordered List</h3>
	  <ul>
		<li>List Item 1</li>
		<li>List Item 2</li>
		<li>List Item 3</li>
	  </ul>

	  <h3>Definition List</h3>
	  <dl>
		<dt>Definition List Term 1</dt>
		<dd>This is a definition list description.</dd>
		<dt>Definition List Term 2</dt>
		<dd>This is a definition list description.</dd>
		<dt>Definition List Term 3</dt>
		<dd>This is a definition list description.</dd>
	  </dl>

	  <hr />

		<h1 id="tables">Tables</h1>

		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Table Header 1</th>
				<th>Table Header 2</th>
				<th>Table Header 3</th>
			</tr>
			<tr>
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
			</tr>
			<tr>
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
			</tr>
			<tr>
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
			</tr>
		</table>

		<h2>A Striped Table</h2>
		<table cellspacing="0" cellpadding="0" class="table--striped">
			<thead>
				<tr>
					<th>Table Header 1</th>
					<th>Table Header 2</th>
					<th>Table Header 3</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Division 1</td>
					<td>Division 2</td>
					<td>Division 3</td>
				</tr>
				<tr>
					<td>Division 1</td>
					<td>Division 2</td>
					<td>Division 3</td>
				</tr>
				<tr>
					<td>Division 1</td>
					<td>Division 2</td>
					<td>Division 3</td>
				</tr>
			</tbody>
		</table>

		<h2>A Bordered Table</h2>
		<table cellspacing="0" cellpadding="0" class="table--bordered">
			<tr>
				<th>Table Header 1</th>
				<th>Table Header 2</th>
				<th>Table Header 3</th>
			</tr>
			<tr>
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
			</tr>
			<tr>
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
			</tr>
			<tr>
				<td>Division 1</td>
				<td>Division 2</td>
				<td>Division 3</td>
			</tr>
		</table>

	<hr />

	  <h1 id="form_elements">Fieldsets, Legends, and Form Elements</h1>

	  <p>This last section contains elements that don't render well in markdown. Please consult the final section in <a href="https://github.com/bryanbraun/frontend-styleguide/blob/master/styleguide.html">styleguide.html</a>, to see the rest of the styleguide.</p>

	  <fieldset>
		<legend>Legend</legend>

		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus.</p>

		<form class="enquiry-form">
		<h2>Form Element</h2>

		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>

		<p><label for="text_field">Text Field:</label><br />
		<input type="text" id="text_field" /></p>

		<p><label for="text_area">Text Area:</label><br />
		<textarea id="text_area"></textarea></p>

		<p><label for="select_element">Select Element:</label><br />
		  <select name="select_element">
		  <optgroup label="Option Group 1">
		  <option value="1">Option 1</option>
		  <option value="2">Option 2</option>
		  <option value="3">Option 3</option>
		  </optgroup>
		  <optgroup label="Option Group 2">
		  <option value="1">Option 1</option>
		  <option value="2">Option 2</option>
		  <option value="3">Option 3</option>
		  </optgroup>
		</select></p>

		<p><label for="radio_buttons">Radio Buttons:</label><br />
		  <input type="radio" class="radio" name="radio_button" value="radio_1" /> Radio 1<br/>
		  <input type="radio" class="radio" name="radio_button" value="radio_2" /> Radio 2<br/>
		  <input type="radio" class="radio" name="radio_button" value="radio_3" /> Radio 3<br/>
		</p>

		<p><label for="checkboxes">Checkboxes:</label><br />
		  <input type="checkbox" class="checkbox" name="checkboxes" value="check_1" /> Radio 1<br/>
		  <input type="checkbox" class="checkbox" name="checkboxes" value="check_2" /> Radio 2<br/>
		  <input type="checkbox" class="checkbox" name="checkboxes" value="check_3" /> Radio 3<br/>
		</p>

		<form action="/contact/submit/" method="post" name="contact" id="contact">
			<p class="white">Please complete all the <span class="required">(*) required</span> fields below before submitting the form.</p>

			<p class="form-item"><label for="enquiry_name" class="required">Full Name: (*)<br></label>
			<input name="enquiry_name" type="text" id="enquiry_name" placeholder="*Enter Your Full Name" value="<?php echo $_SESSION["enquiry_name"]; ?>" class="required <? if ($_SESSION["error_enquiry_name"]) echo 'error'; ?>">
			<?php echo $_SESSION["error_enquiry_name"]; ?></p>

			<p class="form-item"><label for="enquiry_company">Company Name:<br></label>
			<input name="enquiry_company" type="text" id="enquiry_company" placeholder="Enter Company Name"></p>


			<p class="form-item"><label for="enquiry_email" class="required">Email Address: (*)<br></label>
			<input name="enquiry_email" type="email" id="enquiry_email" placeholder="*Your Email Address" value="<?php echo $_SESSION["enquiry_email"]; ?>" class="required <?php if ($_SESSION["error_enquiry_email"]) echo 'error'; ?>">
			<?php echo $_SESSION["error_enquiry_email"]; ?></p>

			<p class="form-item"><label for="enquiry_telephone" class="required">Telephone/Mobile: (*)<br></label>
			<input name="enquiry_telephone" type="tel" id="enquiry_telephone" placeholder="*Enter Your Telephone or Mobile" value="<?php echo $_SESSION["enquiry_telephone"]; ?>" class="required <? if ($_SESSION["error_enquiry_telephone"]) echo 'error'; ?>" value="<?php echo $_SESSION["enquiry_telephone"]; ?>">
			<?php echo $_SESSION["error_enquiry_telephone"]; ?></p>


			<div class="form-item margin-bottom"><label for="enquiry_heard">How did you hear about us?</label>
				<div class="select-list">
					<select tabindex="1" name="enquiry_heard" id="enquiry_heard">
						<option value="" selected>Please Select</option>
						<option value="Business Card"<? if($_SESSION["enquiry_heard"]=="Business Card") echo "selected";?>>Business Card</option>
						<option value="Conference/Exhibition"<? if($_SESSION["enquiry_heard"]=="Conference/Exhibition") echo "selected";?>>Conference/Exhibition</option>
						<option value="eShot"<? if($_SESSION["enquiry_heard"]=="eShot") echo "selected";?>>eShot</option>
						<option value="Existing Customer"<? if($_SESSION["enquiry_heard"]=="Existing Customer") echo "selected";?>>Existing Customer</option>
						<option value="Presentation"<? if($_SESSION["enquiry_heard"]=="Presentation") echo "selected";?>>Presentation</option>
						<option value="Recommendation"<? if($_SESSION["enquiry_heard"]=="Recommendation") echo "selected";?>>Recommendation</option>
						<option value="Search Engine"<? if($_SESSION["enquiry_heard"]=="Search Engine") echo "selected";?>>Search Engine (Google, Yahoo!, Bing, etc.)</option>
						<option value="Social Media"<? if($_SESSION["enquiry_heard"]=="Social Media") echo "selected";?>>Social Media (Facebook, LinkedIn, Twitter etc)</option>
						<option value="Word of Mouth"<? if($_SESSION["enquiry_heard"]=="Word of Mouth") echo "selected";?>>Word of Mouth</option>
						<option value="YouTube"<? if($_SESSION["enquiry_heard"]=="YouTube") echo "selected";?>>YouTube</option>
						<option value="Other"<? if($_SESSION["enquiry_heard"]=="Other") echo "selected";?>>Other (please specify)*</option>
					</select>
				</div>
			</div>

			<div class="clear" id="contact_other">
				<p><label for="enquiry_heard_other">Other:<br></label>
				<textarea name="enquiry_heard_other" rows="5" id="enquiry_heard_other" placeholder="Please specify how you found us..."><?php echo $_SESSION["enquiry_heard_other"]; ?></textarea></p>
			</div>




			<p class="clear"><label for="enquiry_message" class="required">Message: (*)<br></label>
			<textarea name="enquiry_message" rows="5" id="enquiry_message" placeholder="*Enter Your Enquiry"  class="required <?php if ($_SESSION["error_enquiry_message"]) echo 'error'; ?>"><?php echo $_SESSION["enquiry_message"]; ?></textarea>
				<?php echo $_SESSION["error_enquiry_message"]; ?></p>

			<p class="hidden">
				<label for="honeybot">If you are human please leave this blank else your submission will not go through:</label>
				<input name="honeybot" type="text" id="honeybot" value="" /></p>
			<p><?php echo $_SESSION["error_honeybot"]; ?></p>

			<p class="clear"><button type="submit" class="btn">Submit Enquiry</button></p>
		</form>

		</form>

	  </fieldset>

	</main>

	<aside role="complementary" class="side-bar">
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
	Website &copy; <a href="http://www.amasci.co.uk" target="_blank" title="visit Amasci Creative Limited - Web Solutons, Graphic Design and much more."  class="textFooterAmasci">Amasci Creative Limited, website design Milton Keynes</a> 2013</p>
	</p>
  </div>
</footer>


<!-- JAVASCRIPTS
 ================================================== -->

<!-- TODO: Replace JQuery with CDN and Local Fallback. Update Version number as required -->
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/jquery.min.js"><\/script>')</script>-->

<script type="text/javascript" src="/assets/js/savetheorphans.min.js"></script>
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