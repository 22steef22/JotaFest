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
	                    <li class="selected"><a class="selected" href="/">Home</a></li>
	                    <?php include_once("Links/DeelnemersLink.php") ?>
	                    <?php include_once("Links/InformatieLink.php") ?>
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
	            <h1>JotaFest</h1>
	            <p>
		            In Noord-Holland wordt tijdens de Jota elk jaar weer een zogenoemde JotaCross gehouden. Hiervoor wordt door iedere deelnemende groep een thuisteam en een mobiel team gemaakt. Het mobiele team trekt eropuit met de auto, uitgerust met zender, en gaat posten af waar ze opdrachten moeten doen om zoveel mogelijk punten te verzamelen.
	            </p>
		            
		            <br />
		            <img src="Jotacross2012-308.png" />

		        <p>
					Ook is er altijd een opdracht voor onderweg. Bijvoorbeeld schilderen op nummer, en probeer dat maar eens in een auto te doen. Het thuisteam krijgt een grote hoeveelheid vragen op zich afgevuurd, die zo goed mogelijk moeten worden beantwoord, gecodeerd en weer teruggestuurd moeten worden.
					Verder is er ook nog de thuisopdracht, bijvoorbeeld een knoopwerk of het maken van verkleedkleren. Deze opdracht moet door het thuisteam naar de eindbestemming van de cross worden gebracht.
					Wie als Scoutinggroep het meeste aantal punten verzamelt wint de JotaCross en mag deze het jaar daarop organiseren
	            </p>
            </section>
	        <footer>
	            <div class="footerdiv">
	                <p>
	                	JotaFest @ Rurik Heiloo
		                <!--
				            <?php
			                $date = time();
							date_default_timezone_set('DST');
							echo date(DATE_ATOM, $date);
			                ?>
		                -->
	                </p>
	            </div>
	        </footer>
        </div>
    </body>
</html>