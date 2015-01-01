   <!DOCTYPE html>
<html>
<head>
	<title>Deepak Portfolio</title>
	<meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height,initial-scale=1,user-scalable=no" />
	<link href="css/style.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link href="js/isotopes/isotope.css" rel="stylesheet" type="text/css" >
	<link href="http://fonts.googleapis.com/css?family=Cabin+Sketch:bold" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.1.min.js"></script>	
</head>
<body>
	<div id="intro">
		<header id="topHeader">	
			<div class="logo"><a href="">DSP</a></div>
			<div id="socialIcons">
				<ul>
					<li><a href="" ><img src="images/twitter.png" alt="social Icon"></a></li>
					<li><a href="" ><img src="images/facebook.png" alt="social Icon" ></a></li>
					<li><a href="" ><img src="images/google-plus.png" alt="social Icon"></a></li>
				</ul>
			</div>
		</header>
		<div id="container">
			<article id="info">
				<div ><h3><span> UX DESIGNER + WEB DEVELOPER</span> <br>Based In The Heart Of Melbourne</h3></div>
			</article>
			<nav id="navigationIcons">
				<ul>
					<li ><a href="#portfolio"><img src="images/portfolioImg.png" alt="Nav Icon"><p>Portfolio</p></a></li>
					<li ><a href="#skills"><img src="images/skillsImg.png" alt="Nav Icon"><p>Skills</p></a></li>
					<li ><a href="#contact"><img src="images/contactImg.png" alt="Nav Icon"><p>Contact</p></a></li>
				</ul>
			</nav>
			<div id="githubIcon"> <a href="https://github.com/deepak6sp" target="_blank"> MyGitHub </a> </div>
		</div>
	</div>
	<section class="divider image1" >
		<p>“WE ARE STUCK WITH TECHNOLOGY WHEN WHAT WE REALLY WANT IS STUFF THAT WORKS"</p><h5>-Douglas Adams</h5>
	</section>
	<div id="portfolio">
		<nav id="navMenu">
			<span class="nav-btn"></span>
			<div id="logo" ><a href="index.php">DSP</a></div>
			<ul>
				<li><a href="#portfolio" class="active">Portfolio</a></li>
				<li ><a href="#skills">Skills</a></li>
				<li ><a href="#contact">Contact</a></li>
			</ul>
		</nav>
		<div id="mainContent">
			<div id="filters" class="button-group">
				<button class="button is-checked" data-filter="*">All</button>
				<button class="button" data-filter=".photoshop">Photoshop</button>
				<button class="button" data-filter=".html-css">Html5/CSS3</button>
				<button class="button" data-filter=".php">PHP</button>
				<button class="button" data-filter=".wordpress">CMS</button>
				<button class="button" data-filter=".mobileapp">MobileApps</button>
			</div>
			<div class="isotope">
				<div class="element-item photoshop " data-category="photoshop">
				 	<a class="fancybox" href="images/GridDesigns.jpg" data-fancybox-group="gallery" title="Grid"><img src="images/GridDesigns.jpg" alt="" /> </a><a style="margin-left:35%;"> Grid Design</a>
				</div>
				<div class="element-item photoshop " data-category="photoshop">
					<a class="fancybox" href="images/BikeStudio.jpg" data-fancybox-group="gallery" title="BikeStudio"><img src="images/BikeStudio.jpg" alt=""/></a><a style="margin-left:35%;">Bike Studio</a>
				</div>
				<div class="element-item html-css " data-category="html-css">
					<a class="fancybox" href="images/9studio.png" data-fancybox-group="gallery" title="www.cg9studio.com"> <img src="images/9studio.png" alt=""></a>
					<a href="http://cg9studio.com/" style="margin-left:20%;" target="_blank" > www.cg9studio.com </a>
				</div>
				<div class="element-item html-css " data-category="html-css">
					<a class="fancybox" href="images/bridal.png" data-fancybox-group="gallery" title="Bridal Palace"> <img src="images/bridal.png" alt=""></a>
					<a href="http://deepaksp.info/darshini" style="margin-left:15%;" target="_blank" > www.bridalpalace.com.au </a>
				</div>
				<div class="element-item php " data-category="php">
				 	<a class="fancybox" href="images/restaurant.png" data-fancybox-group="gallery" title="Bayside Restaurant"><img src="images/restaurant.png" alt=""></a>
				 	<a href="http://deepaksp.info/bayside-restaurant/" style="margin-left:15%;" target="_blank"> www.bayside.com.au </a>
				</div>
				<div class="element-item php " data-category="php">
				 	<a class="fancybox" href="images/alwaysonline.png" data-fancybox-group="gallery" title="alwaysonline"><img src="images/alwaysonline.png" alt=""></a>
				 	<a href="http://deepaksp.info/alwaysonline/" style="margin-left:15%;" target="_blank" > www.alwaysonline.com </a>
				</div>
				<div class="element-item wordpress " data-category="wordpress">
				  	<a class="fancybox" href="images/wordpress-1.png" data-fancybox-group="gallery" title="wordpress"><img src="images/wordpress-1.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<section class="divider image2" ><p>"IMAGINATION IS MORE IMPORTANT THAN KNOWLEDGE"</p><h5>-Albert Einstein</h5></section>
	<div id="skills">
		<article><h4>
			I am a freelance Designer and Developer.I create beautiful designs in Photoshop. I develop with skills of minimal usability designs and using core XHTML/HTML5, CSS3 (bootstrap) and Javascript (Jquery) but not limited to using frameworks such as Boilerplate, Bootstrap and Angular for single page applications. Have experience using PHP (wordpress) and MYSQL and knowledge of MVC ruby on rails. I have passion for what i do and really love web technologies, and hope to do this forever.</h4>
		</article>
		<div id="skillset">
				<ul id="parentskillset">
					<li>Web Languages
						<ul class="childskillset">
							<li>HTML5/XHTML</li>
							<li>CSS3/Bootstrap</li>
							<li>JavaScript/Jquery</li>
							<li>PHP</li>
						</ul>
					</li>
					<li>Web Frameworks
						<ul class="childskillset">
							<li>Angular</li>							
							<li>WordPress</li>
							<li>Joomla</li>
							<li>SAAS</li> 
						</ul>
					</li>
					<li>Collaboration
						<ul class="childskillset">
							<li>GitHub</li>
							<li>Bower</li>
							<li>Grunt</li>
							<li>Yomen</li>
						</ul>
					</li>
				</ul>
			</div>
		<div id="github"><a href="https://github.com/deepak6sp" target="_blank"> Click Here to view my GitHub </a></div>
	</div>
	<section> 
		<div class="divider image3" ><p>THE ONLY WAY TO DO GREAT WORK IS TO LOVE WHAT YOU DO"</p><h5>-Steve Jobs</h5></div>
	</section>
	<div id="contact">
		<div id="text"><p>Got A project? Keep In Touch !!!</p></div>
		<aside class="contact" >
			Reach Me On
			<p>0422596332</p>
			<p><span>deepak6sp @gmail.com</span></p>
		</aside>
		<aside id="form">
			<form class="form" >
				<input id="name" type="text" placeholder="Your Name Please">
				<input id="email" type="email" placeholder="Email address">
				<textarea placeholder="Your Message"></textarea>
				<input id="submit" name="submit" type="submit" value="Send">
			</form>
		</aside>
	</div>
	<!-- page visit counter program 
	<div id="counter">
		<h5 style="color:black"> Visit:
			<?php
				if (file_exists('counter_file.txt')){
					$file = fopen('counter_file.txt', "r");
					$data = fread($fil, filesize('counter_file.txt')); 
					echo $data+1;
					fclose($file);						
					$file = fopen('counter_file.txt', "w");
					fwrite($file, $data);					
				}
				else{
					$file = fopen('counter_file.txt', "w");
					fwrite($file, 1);
					echo '1';
					fclose($file);
				}
			?>
		</h5>-->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="js/isotopes/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/isotopes/isotope.js"></script>
	<script type="text/javascript" src="js/magnify/jquery.jMagnify.js"></script>
</body>
</html>