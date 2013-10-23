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
	                    <?php include_once("Links/BijlagesLink.php") ?>
	                    <li class="selected"><a class="selected" href="/livestream.php">Livestream</a></li>
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
	            <h1>Livestream</h1>
	            <p>
		            Hier de prachtige livestreams van het JotaFest
	            </p>
	            <p>
		            JotaFest Vrijdag 20:00-24:00
	            </p>
	            <iframe width="420" height="315" src="http://www.youtube.com/embed/FvRZRM-yslI" frameborder="0" allowfullscreen></iframe>
	            <p>
		            JotaFest Zaterdag 16:00-20:00
	            </p>
	            <iframe width="420" height="315" src="http://www.youtube.com/embed/aTIyK-uRHXI" frameborder="0" allowfullscreen></iframe>
	            <p>
		            JotaFest Zaterdag 20:00-24:00
	            </p>
	            <iframe width="420" height="315" src="http://www.youtube.com/embed/FbY43TBsklk" frameborder="0" allowfullscreen></iframe>
	            <p>
		            JotaFest Zaterdag 00:00-03:00
	            </p>
	            <iframe width="420" height="315" src="http://www.youtube.com/embed/j0jIJA8P1n4" frameborder="0" allowfullscreen></iframe>
            </section>
	        <footer>
	            <div class="footerdiv">
	                <p>JotaFest @ Rurik Heiloo</p>
	            </div>
	        </footer>
        </div>
    </body>
</html>