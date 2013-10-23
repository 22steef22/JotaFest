<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>JotaFest</title>
        <link href="~/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta name="viewport" content="width=device-width" />
        <link href="site.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php include_once("googleanalytics.php") ?>
        <header>
            <div class="content-wrapper">
            	<div id="logo"><a href="http://www.jotafest.de/"><img class="logo" style="z-index: -100;" src="logo.png" alt="JotaFest Logo"></img></a></div>
                
            </div>
        </header>
          <div id="mainbody">
          	<div id="sidebar">
	          	<nav>
	                <ul id="menu">
	                    <?php include_once("Links/IndexLink.php") ?>
	                    <?php include_once("Links/DeelnemersLink.php") ?>
	                    <?php include_once("Links/InformatieLink.php") ?>
	                    <li class="selected"><a class="selected" href="/bijlages.php">Bijlages</a></li>
	                    <?php include_once("Links/LivestreamLink.php") ?>
	                    <?php include_once("Links/UitslagLink.php") ?>
	                    <?php include_once("Links/ContactLink.php") ?>
	                </ul>
	            </nav>
	            <div class="twitterclass">
					<a class="twitter-timeline" href="https://twitter.com/RurikCross" data-widget-id="375341628010942464">Tweets by @RurikCross</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
          	</div>
            <section class="main-content">
	            <h1>Bijlages</h1>
	            <?php
					$date = time();
					date_default_timezone_set('DST');
				?>
				<p>  
	          		Afbeelding 1 BLOK 1 (vanaf 19:00)
		        </p>
				<?php
					$blok1Start = strtotime('2013-10-19 19:00:00');		
					if ($date > $blok1Start) {
				?>
			        <img width="556" height="300" src="afbeelding1.png" />
				<?php
					}
				?>
				<br />
		        <br />
		        <p>  
	          		Afbeelding 2 BLOK 2 (vanaf 19:30)
		        </p>
				<?php
					$blok2Start = strtotime('2013-10-19 19:30:00');		
					if ($date > $blok2Start) {
				?>
			        <img width="500" height="887" src="afbeelding22222.png" />
				<?php
					}
				?>
				<br />
		        <br />
				<p>  
	          		Afbeelding 3 BLOK 3 (vanaf 20:00)
		        </p>
				<?php
					$blok3Start = strtotime('2013-10-19 20:00:00');		
					if ($date > $blok3Start) {
				?>
			        <img width="500" height="667" src="afbeelding3Blok3.jpg" />
				<?php
					}
				?>
				<br />
		        <br />
				<p>  
	          		Afbeelding 4 BLOK 4 (vanaf 20:30)
		        </p>
				<?php
					$blok4Start = strtotime('2013-10-19 20:30:00');		
					if ($date > $blok4Start) {
				?>
			        <img width="500" height="355" src="afbeelding448844.png" />
				<?php
					}
				?>
		        <br />
		        <br />
				<p>  
	          		Afbeelding 5 BLOK 5 (vanaf 21:00)
		        </p>
				<?php
					$blok5Start = strtotime('2013-10-19 21:00:00');		
					if ($date > $blok5Start) {
				?>
			        <img width="500" height="667" src="afbeelding5577555.jpg" />
				<?php
					}
				?>
            </section>
	        <footer>
	            <div class="footerdiv">
	                <p>
	                	JotaFest @ Rurik Heiloo
	                </p>
	            </div>
	        </footer>
        </div>
    </body>
</html>