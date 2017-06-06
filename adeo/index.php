<!DOCTYPE html>
<html lang="en">
<head>
	<!--	This page has been validatated, then x-browser chcked in Safari, Opera and FireFox.  It was built in Chrome on a Mac (this is why I haven't tested it in IE)		-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>TorchPR</title>
	<link href="css/site.css" rel="stylesheet" type="text/css" />
	<link href="css/superfish/superfish.css" rel="stylesheet" type="text/css" /><!--	Base CSS for the menu system	-->
	<!--link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" /--><!--	Base CSS for the (unused) slider. Fully responsive (I've tested it on another site).	-->
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'><!--	The fonts from Google	-->
	<script src="js/jquery-1.11.0-min.js" type="text/javascript"></script><!--	Load jQuery	-->
	<script src="js/superfish/hoverIntent.js" type="text/javascript"></script><!--	Load Hover Intent for the menu	-->
	<script src="js/superfish/superfish.js" type="text/javascript"></script><!--	Load the menu system	-->
	<!--script src="js/jquery.bxslider.js" type="text/javascript"></script-->
	<script src="js/site.js" type="text/javascript"></script><!--	Executes the jQuery	-->
</head>

<body>
	<div id="outer">
    	<div id="content">
            <div id="header">
            	<div id="logo">
           	    	<a href="/"><img src="images/logo.png" width="218" height="86" alt="Logo" title="Click logo to return to home page"/></a><!--	Validates in HTML5	-->
                </div>
                <div id="mainMenu">
                        <ul class="sf-menu"><!--	The class links it to the menu system	-->
                            <li><a href="/">Home</a></li>
                            <li><a href="pages/services.php">Services</a>
                            <li><a href="pages/results.php">Results</a></li>
                            <li><a href="pages/team.php">Team</a></li>
                            <li><a href="pages/clients.php">Clients</a></li>
                            <li><a href="pages/contact.php">Contact Us</a></li>
                        </ul>
                </div>
                <div id="spacer">
                	<!--	Adds a coloured gap using CSS	-->
                </div>
                <div id="slider">
                	<!--	A jQuery slider would go here.  I tend to use BXSLIDER (as it's lightweight) but it's not up to the job of two captions	-->
                    <img src="images/slider/slide1.jpg" title="Since 2003 we have built a reputation for delivering strategic public relations for client within FMCG." alt="Since 2003 we have built a reputation for delivering strategic public relations for client within FMCG." />
                </div>
            </div>
<div id="main">
                <h2>Just some of the leading brands we work with ...</h2>
				<ul id="leadingBrands">
                    <li><img src="images/starbucks.jpg" alt="starbuck's logo" title="Starbuck's"/></li>
                    <li><img src="images/pepsi.jpg" alt="pepsi logo" title="Pepsi"/></li>
                    <li><img src="images/nestles.jpg" alt="nestle logo" title="Nestle"/></li>
                    <li><img class="end" src="images/kelloggs.jpg" alt="kelloggs logo" title="Kelloggs"/></li>
                </ul>
                <ul id="links">
                    <li id="news">
                        <img src="images/newsBG.gif" alt="News"/><!--	Was originally a background image but upsets the gradient.  CSS3 allows multiple backgrounds but some browsers don';t like CSS3	-->
                        <h2>Recent news</h2>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id quam quis tortor auctor blandit at convallis ipsum.</p>
                        <a href="pages/news.php"><img class="moreButton" src="images/moreButton.gif" alt="button" title="Click here for more ..." /></a><!--	See link above for comment	-->
                    </li>
                    <li id="clientsSay">
                        <img src="images/clientsSayBG.gif" alt="Testimonials"/>
                        <h2>What our clients say</h2>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id quam quis tortor auctor blandit at convallis ipsum.</p>
                        <a href="pages/clientsSay.php"><img class="moreButton" src="images/moreButton.gif" alt="button" title="Click here for more ..." /></a>
                    </li>
                    <li id="caseStudies">
                        <img src="images/caseStudiesBG.gif" alt="case studies"/>
                        <h2>Case studies</h2>
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id quam quis tortor auctor blandit at convallis ipsum.</p>
                        <a href="pages/caseStudies.php"><img class="moreButton" src="images/moreButton.gif" alt="button" title="Click here for more ..." /></a>
                    </li>
                </ul>
            </div>
			<div id="footer">
            	<div id="topFooter">
                	<div id="services">
                    	<h2>Services</h2>
                        <ul>
                        	<li><a title="More ..." href="pages/public.php">Public Relations</a></li>
                        	<li><a title="More ..." href="pages/media.php">Media Coaching</a></li>
                        	<li><a title="More ..." href="pages/reputation.php">Reputation Management</a></li>
                        	<li><a title="More ..." href="pages/crisis.php">Crisis Management</a></li>
                        </ul>
                    </div>
                 	<div id="company">
                    	<h2>Company</h2>
                        <ul>
                        	<li><a title="More ..." href="pages/about.php">About Us</a></li>
                        	<li><a title="More ..." href="pages/results.php">Results</a></li>
                        	<li><a title="More ..." href="pages/privacy.php">Privacy &amp; Cookies</a></li>
                        	<li><a title="More ..." href="pages/accessibility.php">Accessibility</a></li>
                        </ul>
                    </div>
                	<div id="other">
                        <h3>Call us <span>+44 200 9999 9999</span> or email <a href="mailto::info@torchpr.com" title="Email us"><span>info@torchpr.com</span></a></h3>
                        <p>UK 221B Baker St London NW1 6XE</p>
                        <p><strong>USA 30 Rockefellar Plaza, New York City, NY 10111</strong>
                        <form action="index.php" method="get">
                            <input name="mailingListEmail" id="mailingListEmail" type="email" placeholder="Enter you email address to join our mailing list"/>
                            <input name="mailingListSubmit" id="mailingListSubmit" type="submit" value="SIGN UP" />
                        </form>
                    </div>
               </div>
               <div id="bottomFooter">
					<div id="adeo">
                    	<p>Web Design Company Adeo Group</p>
                    </div>
                 	<div id="social">
                    	<ul>
                        	<li><img src="images/twitter.gif" alt="twitter link" title="Follow us on twitter"/></li>
                        	<li><img src="images/facebook.gif" alt="facebook link" title="View our Facebook page"/></li>
                        	<li><img src="images/linkedIn.gif" alt="linked in link" title="View our LinkedIn page"/></li>
                        	<li><img src="images/rss.gif" alt="rss feed" title="View our RSS feed"/></li>
                        </ul>
                    </div>
                	<div id="copyright">
                    	<p>&copy; 2013 Torch PR. All rights reserved.</p>
                    </div>
               </div>
	        </div>
        </div>
    </div>
</body>
</html>



