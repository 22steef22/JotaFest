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
	                    <?php include_once("Links/LivestreamLink.php") ?>
	                    <li class="selected"><a class="selected" href="/uitslag.php">Uitslag</a></li>
	                    <?php include_once("Links/ContactLink.php") ?>
	                </ul>
	            </nav>
	            <div class="twitterclass">
					<a class="twitter-timeline" href="https://twitter.com/RurikCross" data-widget-id="375341628010942464">Tweets by @RurikCross</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
          	</div>
            <section class="main-content">
	            <h1>Uitslag</h1>
	            <p>
		            De Einduitslag van onze geweldig JotaFest (JotaCross 2013)
	            </p>
	            <table style="width: 100%; text-align: left;">
	            	<tr>
		            	<th>Nr.</th>
		            	<th>Naam</th>
		            	<th>Plaats</th>
		            	<th>Punten</th>
	            	</tr>
		            <tr>
			            <td>1</td>
			            <td>Scouting Laurentius</td>
			            <td>Alkmaar</td>
			            <td>320</td>
		            </tr>
		            <tr>
			            <td>2</td>
			            <td>Dirk Duyvel Gruppe</td>
			            <td>Alkmaar</td>
			            <td>298</td>
		            </tr>
		            <tr>
			            <td>3</td>
			            <td>Jacobusgroep Akersloot</td>
			            <td>Akersloot</td>
			            <td>278</td>
		            </tr>
		            <tr>
			            <td>4</td>
			            <td>De Geuzen</td>
			            <td>Alkmaar</td>
			            <td>268</td>
		            </tr>
		            <tr>
			            <td>5</td>
			            <td>Scouting Uitgeest</td>
			            <td>Uitgeest</td>
			            <td>261</td>
		            </tr>
		            <tr>
			            <td>6</td>
			            <td>Scouting Elfregi Zaanstreek</td>
			            <td>Zaanstreek</td>
			            <td>255</td>
		            </tr>
		            <tr>
			            <td>7</td>
			            <td>Scouting Assendelft</td>
			            <td>Assendelft</td>
			            <td>249</td>
		            </tr>
		            <tr>
			            <td>8</td>
			            <td>Corvus Corone</td>
			            <td>Den Oever</td>
			            <td>234</td>
		            </tr>
		            <tr>
			            <td>9</td>
			            <td>Discovery & Martin Luther King</td>
			            <td>Hoorn</td>
			            <td>207</td>
		            </tr>
		            <tr>
			            <td>10</td>
			            <td>Graaf Daron</td>
			            <td>Alkmaar</td>
			            <td>193</td>
		            </tr>
		            <tr>
			            <td>11</td>
			            <td>Scouting Limmen</td>
			            <td>Limmen</td>
			            <td>189</td>
		            </tr>
		            <tr>
			            <td>12</td>
			            <td>Jutters Rainiero</td>
			            <td>Den Helder</td>
			            <td>182</td>
		            </tr>
		            <tr>
			            <td>13</td>
			            <td>Scouting Angela</td>
			            <td>Heerhugowaard</td>
			            <td>177</td>
		            </tr>
		            <tr>
			            <td>14</td>
			            <td>De watergeuzen</td>
			            <td>Zaandam</td>
			            <td>173</td>
		            </tr>
		            <tr>
			            <td>15</td>
			            <td>Scouting Krommenie</td>
			            <td>Krommenie</td>
			            <td>165</td>
		            </tr>
	            </table>
	            <br />
	            <p>
	            	<a href="/Informatie/uitslag.pdf" target="_blank">Uitslag pdf</a>
	            </p>
	            <br />
	            <p>
	            	<a href="/bronnenboek jota-KR.pdf" target="_blank">Ons wederom prachtige bronnenboek!</a>
	            </p>
	            
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