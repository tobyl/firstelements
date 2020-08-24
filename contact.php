<?php
if($_POST){
	if(
		!empty($_POST['name']) ||
		!empty($_POST['email']) ||
		!preg_match('/\S+@\S+\.\w+/', $_POST['email']) ||
		!empty($_POST['subject']) ||
		!empty($_POST['message'])
	){
		$sent = mail(
			'cbenotto@firstelements.ca',
			'New message from FEI visitor: '.$_POST['subject'],
			$_POST['message'],
			"From: {$_POST['name']} <{$_POST['name']}>\r\n".
			"Reply-to: {$_POST['name']} <{$_POST['name']}>\r\n"
		);
		if($sent){
			$msg = 'Message sent, thank you';
			$_POST = array();
		}else{
			$msg = 'Error sending message, please try again';
		}
	}elseif(!preg_match('/\S+@\S+\.\w+/', $_POST['email'])){
		$msg = 'Please provide a valid email address';
	}else{
		$msg = 'Please fill in all fields';
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class='no-js' lang='en'>
<!--<![endif]-->
<head>
	<meta charset='utf-8' />
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
	<title></title>
	<meta content='' name='description' />
	<meta content='' name='author' />
	<meta content='width=960' name='viewport' />
	<link href='stylesheets/style.css' rel='stylesheet' />
	<script src='javascripts/modernizr-2.0.6.min.js'></script>
</head>
<body>
	<div id='container'>

		<?php include('hdr.php'); ?>

		<div class="hdr-image">

			<img src="img/banners/contact.jpg">
			<div>
				<h2>Get in touch with us.</h2>
				<h3>We can help.</h3>
			</div>

		</div>

		<div id='main' class='contact clearfix' role='main'>

			<form action="#contact" method="post" class="box" id="contact">

			<h4>Contact Us</h4>

				<div class="form-fields color">
					<?php if($msg) echo '<p>'.$msg.'</p>'?>
					<label>
						<span class="visuallyhidden">Name:</span>
						<input type="text" name="name" value="<?php echo $_POST['name']?>" placeholder="Your name" required>
					</label>
					<label>
						<span class="visuallyhidden">Email:</span>
						<input type="text" name="email" value="<?php echo $_POST['email']?>" placeholder="Email address" required>
					</label>
					<label>
						<span class="visuallyhidden">Subject:</span>
						<input type="text" name="subject" value="<?php echo $_POST['subject']?>" placeholder="Subject" required>
					</label>
					<label>
						<span class="visuallyhidden">Message:</span>
						<textarea name="message" rows="3"><?php echo $_POST['message']?>Your message</textarea>
					</label>
					<button type="submit">SEND</button>
				</div>
			</form>

			<div class="contact-right">

			<h2>How can we help?</h2>

            <p>If you'd like to inquire about one of our services or have any questions, <br>please fill out the form to get in touch with one of our trained professionals. Alternatively, you can call us at <a href="tel:5199907871">+1 (519) 990.7871</a> between <b>9am and 9pm EST</b> </p>
            <p>If your question isn't urgent, you can send us an email. <br> We'll get back to you within 1 business day.</p>


            <ul class="contact-social clearfix">
            	<li><a href="https://twitter.com/FirstElementsIn" class="tw-ft" target="_blank">Twitter</a></li>
				<li><a href="https://www.facebook.com/FirstElementsInc" class="fb-ft" target="_blank">Facebook</a></li>
				<li><a href="http://www.linkedin.com/company/first-elements-incorporated" class="li-ft" target="_blank">LinkedIn</a></li>

            </ul>

            <h3>Downloads</h3>

            <p>Click below for PDF of our services.</p>

            <a href="fei-web.pdf" class="download-pdf" target="_blank"><img src="img/download.png"></a>

            <!-- <iframe width="100%" height="400" frameborder="0" scrolling="no" src="http://www.bing.com/maps/embed/viewer.aspx?v=3&cp=42.200458~-82.921394&lvl=11&w=500&h=400&sty=r&typ=d&pp=&ps=&dir=0&mkt=en-ca&src=SHELL&form=BMEMJS"></iframe> -->

            </div> <!-- contact right -->

		</div> <!-- main -->
		<footer class="clearfix">

			<a href="/" class="ft-logo">First Elements Inc</a>

			<ul class="ft-list pull-right">

				<li><a href="https://twitter.com/FirstElementsIn" class="tw-ft ir" target="_blank">Twitter</a></li>
				<li><a href="https://www.facebook.com/FirstElementsInc" class="fb-ft ir" target="_blank">Facebook</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="services.php">Services</a></li>

			</ul>

		</footer>
	</div>
	<script src='//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
	<script>
		window.jQuery || document.write("<script src='js/jquery-1.6.2.min.js'>\x3C/script>")
	</script>
	<script src='javascripts/plugins.js'></script>
	<script>
		var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"],["_trackPageLoadTime"]];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
	<script type="text/javascript" src="//use.typekit.net/oph0xzb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!--[if lt IE 7]>
	<script src='//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js'></script>
	<script>
		window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})});
	</script>
	<![endif]-->
</body>
</html>
