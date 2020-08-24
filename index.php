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
	<meta content='First Elements offers consultantcy, assessment and remediation services Canada-wide to identify potential sources of environmental risk and liability for property owners, prospective property buyers or lending institutions.' name='description' />
	<meta content='Spotvin Inc' name='author' />
	<meta content='width=960' name='viewport' />
	<link href='stylesheets/style.css' rel='stylesheet' />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
	<div id='container'>
		<?php include('hdr.php'); ?>
		<div id='main' class='home clearfix' role='main'>

		<div class="full-width">

			<div id="carousel" class="full-width">

				<div class="carou-item">
					<div class="inner">
						<img src="img/home/main1.jpg">
						<img class="black-overlay" src="img/trans-black.png">
						<div class="overlay">
							<h2>We Are First Elements.</h2>
							<p>First for health, safety and environmental.</p>
							<a href="about.php" class="btn">Learn More</a>
						</div>
					</div>
				</div>

				<div class="carou-item">
					<div class="inner">
						<img src="img/home/main2.jpg">
						<img class="black-overlay" src="img/trans-black.png">
						<div class="overlay">
							<h2>Green and Clean.</h2>
							<p>Solutions for your environmental needs.</p>
							<a href="services.php" class="btn">Learn More</a>
						</div>
					</div>
				</div>

				<div class="carou-item">
					<div class="inner">
						<img src="img/home/main3.jpg">
						<img class="black-overlay" src="img/trans-black.png">
						<div class="overlay">
							<h2>Stay Safe.</h2>
							<p>We take the worry out of OH&amp;S.</p>
							<a href="services.php#health" class="btn">Learn More</a>
						</div>
					</div>
				</div>

			</div>

			<div id="pager"></div>

		</div> <!-- full width -->

			<div class="half-width pull-left">

				<img src="img/home/sub1.jpg">
				<a href="services.php#health" class="black-overlay"> </a>
				<div class="overlay">
					<a href="services.php#health">
						<i class="icon white health-safety">Health and Safety</i>
						<h2>On your side.</h2>
						<p>Responsibility through training.</p>
					</a>
				</div>

			</div>

			<div class="half-width pull-right">

				<img src="img/home/sub2.jpg">
				<a href="services.php#emissions" class="black-overlay"> </a>
				<div class="overlay">
					<a href="services.php#emissions">
						<i class="icon white environmental">Health and Safety</i>
						<h2>Safe and Sound.</h2>
						<p>Emissions Reduction and Compliance.</p>
					</a>
				</div>

			</div>

		</div>
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
	<script src='javascripts/jquery.carouFredSel-6.2.1-packed.js'></script>
	<script>
		var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"],["_trackPageLoadTime"]];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
	<script type="text/javascript" src="//use.typekit.net/oph0xzb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<script type="text/javascript">
		$(document).ready(function() {
		    // Using custom configuration
		    $('#carousel').carouFredSel({
		        direction           : "left",
		        pagination          : '#pager',
		        scroll : {
		            duration        : 1000,
		        }
		    });
		});
	</script>

	<!--[if lt IE 7]>
	<script src='//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js'></script>
	<script>
		window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})});
	</script>
	<![endif]-->
</body>
</html>
