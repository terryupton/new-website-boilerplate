<?php
include("../main-functions.php");

$company = "Comaony Name";
$website = "www.domain.co.uk";
$email = "info@domain.co.uk";


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
    ''.$company.' Website Terms of Use',

    //$metaKeywords
    'Meta Keywords',

    //$metaDescription
    'Meta Description',

    //$template (used to reference different template layouts)
    ''
);

?>

    <h1>Terms of Use</h1>

    <p>This web site is owned and operated by <?php echo $company ?> and is made available to you in accordance with the following terms and conditions. By using the site and the services available on it you are deemed to accept these terms and conditions and any additional terms and conditions which expressly apply to services and information provided by third parties.</p>

    <br>
	<hr>
    <h2>Cookies</h2>

    <p>Like many websites and online services, this website uses cookies to enhance functionality and performance. The cookies used on this website are for the function of the enquiry form(s) and Google Analytics.</p>
    <p>The quick enquiry form uses cookies known as temporary session cookies. They are destroyed once the process is complete or ended (e.g. once the form is submitted). They do not store personal data and are not used for any tracking or monitoring purposes.</p>
    <p>Google Analytics uses first-party cookies to track visitor interactions. These cookies are used to store information, such as what time the current visit occurred, whether the visitor has been to the site before, and what site referred the visitor to the web page. Browsers do not share first-party cookies across domains. Find out more information on the <a href="http://www.google.com/analytics/learn/privacy.html" rel="nofollow">Google Analytics privacy policy</a>.</p>

    <p>Use of our website deems your acceptance of the use of cookies.</p>

    <br>
	<hr>
    <h2>Service availability</h2>

    <p>We try to ensure continuous availability of the site and all the services available on it but accept no responsibility for the consequences of interruptions or delays, however caused. We may, additionally, alter the design and specification of the site at any time.</p>
    <br>
	<hr>
    <h2>Links to external websites</h2>

    <p>Occasionally we will provide a link to an external or third party website. Please note that <?php echo $company ?> is not responsible for the data, policies, content or security of these linked sites and you therefore indemnify <?php echo $company ?> from any liability resulting from your use of these websites.</p>
    <br>
	<hr>

    <h2>Limitation of liability</h2>

    <p>Our liability, and the liability of our third party suppliers, for any loss or damage suffered by you as the result of your use of this site is limited to your actual direct damages and, except in the case of fraud, excludes any loss of future earnings, profit or prospects or any consequential or speculative loss. As required by law, this exclusion does not extend to death or personal injury caused by our negligence.</p>
    <br>
	<hr>

    <h2>Data protection and privacy policy</h2>

    <p><?php echo $company ?> online service is committed to protecting the privacy of our users. We want to provide a safe and secure user experience. We will ensure that the information you submit to us via our website at <?php echo $website ?> remains private, and is only used for the purposes set out in this policy. </p>

    <br>
	<hr>
    <h2>The information we collect and how we use it</h2>

    <p>The personal details you submit via the enquiry form(s), are held and used by us for the purpose of answering your enquiry. We need these details to be able to process a reply. We do not disclose this data to any other person outside <?php echo $company ?> or any other company.</p>

    <br>
	<hr>
    <h2>Changes to our privacy policy</h2>

    <p>This privacy policy may be changed by <?php echo $company ?> at any time. If we change our privacy policy in the future, we will set out those changes here, so that you will always know what personal information we gather, the purposes we might use it for and to whom we might disclose it.</p>

    <br>
	<hr>
    <h2>Access to your personal data</h2>

    <p>You have the right at any time to ask us for a copy of the information supplied by you that we hold. We have the right to charge an administrative fee for this service. If you would like to make a request for information, please contact <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>.</p>

    <br>
	<hr>
    <h2>Governing law</h2>

    <p>These terms and conditions shall be interpreted in accordance with English law and all disputes shall be decided by the English courts</p>

<?php
    do_html_footer();
?>
