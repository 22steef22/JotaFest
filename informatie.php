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
	                    <li class="selected"><a class="selected" href="/informatie.php">Informatie</a></li>
	                    <?php include_once("Links/BijlagesLink.php") ?>
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
	            <h1>Informatie</h1>
	            <p>
		            Documentatie is beschikbaar in de volgende documenten:
	            </p>
	            <br />
	            <p>
	            	<a href="/Informatie/reglementthuis.pdf" target="_blank">Reglementen voor het thuis team</a>
	            </p>
	            <p>
	            	<a href="/Informatie/reglementmobiel.pdf" target="_blank">Reglementen voor het mobiele team</a>
	            </p>
	            <p>
	            	<a href="/Informatie/PSKuitleg.pdf" target="_blank">PSK zend mode uitleg</a>
	            </p>
	            <p>
	            	<a href="/Informatie/antwoordvel.xls" target="_blank">Het antwoordvel</a>
	            </p>
	            <p>
	            	<a href="/Informatie/eenhedentabel.pdf" target="_blank">Eenheden tabel</a>
	            </p>
	            <p>
	            	<a href="/Informatie/coderingsvoorbeelden.pdf" target="_blank">Codering's voorbeelden.pdf</a>
	            </p>
            </section>
	        <footer>
	            <div class="footerdiv">
	                <p>JotaFest @ Rurik Heiloo</p>
	            </div>
	        </footer>
        </div>
    </body>
</html>