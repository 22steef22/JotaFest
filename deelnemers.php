<?php
	$inschrijf = false;
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if (isset($_REQUEST['groepsnaam']))
				{
					if (isset($_REQUEST['contactpersoon']))
					{
						if (isset($_REQUEST['email']))
						{
							if (isset($_REQUEST['telefoonnummer']))
							{
								if (isset($_REQUEST['callsign']))
								{

									$email = $_REQUEST['email'] ;
									$groepsnaam = $_REQUEST['groepsnaam'] ;
									$contactpersoon = $_REQUEST['contactpersoon'] ;
									$telefoonnummer = $_REQUEST['telefoonnummer'] ;
									$callsign = $_REQUEST['callsign'] ;
									require(__DIR__.'/PHPMailer/class.phpmailer.php');
									$mail = new PHPMailer;
									
									$mail->IsSMTP();                                      // Set mailer to use SMTP
									$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup server
									$mail->SMTPAuth = true;                               // Enable SMTP authentication
									$mail->Username = 'jotakreuze@gmail.com';             // SMTP username
									$mail->Password = 'stoeptegel';                       // SMTP password
									$mail->SMTPSecure = 'tls';         
									$mail->Port       = 587;                      // Enable encryption, 'ssl' also accepted
									
									$mail->From = 'jotakreuze@gmail.com';
									$mail->FromName = 'JotaKreuze';
									$mail->AddAddress($email, $contactpersoon);  // Add a recipient
									$mail->AddAddress('jotakreuze@gmail.com', 'Scouting Rurik');  // Add a recipient
									
									$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
									$mail->IsHTML(true);                                  // Set email format to HTML
									
									$mail->Subject = 'JotaFest 2013';
									$mail->Body    = 'Beste ' . $contactpersoon . ' uw inschrijving is succesvol verzonden! <br /> U ontvangt spoedig een bevestiging van ons! <br /> controle gegevens:<br />Groepsnaam: ' . $groepsnaam . '<br />Contactpersoon: ' . $contactpersoon . '<br />Telefoonnummer: ' . $telefoonnummer . '<br />Callsign: ' . $callsign . '<br /><br />Vriendelijke Groeten,<br />Scouting Rurik Heiloo';
									
									if(!$mail->Send()) {
									   echo 'Message could not be sent.';
									   echo 'Mailer Error: ' . $mail->ErrorInfo;
									   exit;
									}									
								} else {
								?>
									<script type="text/javascript">
										alert("Geef een geldige groepsnaam op!");
									</script>
					    		<?php
						    	}
						    } else {
							?>
								<script type="text/javascript">
									alert("Geef een geldige contactpersoon op!");
								</script>
				    		<?php
					    	}
					    } else {
						?>
							<script type="text/javascript">
								alert("Geef een geldig email adres op!");
							</script>
			    		<?php
				    	}
				    } else {
					?>
						<script type="text/javascript">
							alert("Geef een geldig telefoonnummer op!");
						</script>
		    		<?php
		    		}
		    	} else {
		    	?>
					<script type="text/javascript">
						alert("Geef een leuk callsign op ;)");
					</script>
		    	<?php
				}
			} else {
				$inschrijf = true;
			}
		?>
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
	                    <li class="selected"><a class="selected" href="/deelnemers.php">Inschrijven</a></li>
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
            <section class="main-content deelnemers">
	            <?php if($inschrijf) { ?>
	            <h1>Inschrijvingen Jotacross</h1>
	            <p>Het is weer zover het maximale aantal inschrijvingen is bereikt. <br />Hieronder een lijst met de deelnemende groepen:<p>
	            <table>
		            <tr>
			           <th class="tabletitle">Groep</th><th class="tabletitle">Groepsnaam</th><th class="tabletitle">Plaats</th> 
		            </tr>
		            <tr>
		            	<td>1</td><td>Scouting Elfregi Zaanstreek</td><td>Zaanstreek</td>
		            </tr>
		            <tr>
		            	<td>2</td><td>Scouting Uitgeest</td><td>Uitgeest</td>
		            </tr>
		            <tr>
		            	<td>3</td><td>Scouting Angela</td><td>Heerhugowaard</td>
		            </tr>
		            <tr>
		            	<td>4</td><td>Scouting Krommenie</td><td>Krommenie</td>
		            </tr>
		            <tr>
		            	<td>5</td><td>De watergeuzen</td><td>Zaandam</td>
		            </tr>
		            <tr>
		            	<td>6</td><td>Jutters Rainiero</td><td>Den Helder</td>
		            </tr>
		            <tr>
		            	<td>7</td><td>Jacobusgroep Akersloot</td><td>Akersloot</td>
		            </tr>
		            <tr>
		            	<td>8</td><td>Graaf Daron</td><td>Alkmaar</td>
		            </tr>
		            <tr>
		            	<td>9</td><td>De Geuzen</td><td>Alkmaar</td>
		            </tr>
		            <tr>
		            	<td>10</td><td>Corvus Corone</td><td>Den Oever</td>
		            </tr>
		            <tr>
		            	<td>11</td><td>Dirk Duyvel Gruppe</td><td>Alkmaar</td>
		            </tr>
		            <tr>
		            	<td>12</td><td>Scouting Assendelft</td><td>Assendelft</td>
		            </tr>
		            <tr>
		            	<td>13</td><td>Scouting Limmen</td><td>Limmen</td>
		            </tr>
		            <tr>
		            	<td>14</td><td>Scouting Sint Laurentius</td><td>Alkmaar</td>
		            </tr>
		            <tr>
		            	<td>15</td><td>Arcadia</td><td>Grootebroek</td>
		            </tr>
		            <tr>
		            	<td>16</td><td>Discovery & Martin Luther King</td><td>Hoorn</td>
		            </tr>
	            </table>
	            <br />
	            <p>Sta je met je groep niet tussen de lijst dan spijt dit ons maar dan ben je helaas te laat. Er kan nog wel worden ingeschreven maar dan kom je op de wachtlijst te staan voor het geval dat er een groep uitvalt.</p>
	            <p>De gegevens zullen naar ons verstuurd worden en u krijgt een bevestiging.</p>
	            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	                <table>
		                <tr>
		                	<td>Groepsnaam:</td>
		                	<td><input type="text" name="groepsnaam" placeholder="Groepsnaam" required /></td>
		                </tr>
		                <tr>
		                	<td>Contact persoon:</td>
		                	<td><input type="text" name="contactpersoon" placeholder="Contact persoon" required /></td>
		                </tr>
		                <tr>
		                	<td>Email:</td>
		                	<td><input type="email" name="email" placeholder="Email" required /></td>
		                </tr>
		                <tr>
		                	<td>Telefoon nummer:</td>
		                	<td><input type="tel" name="telefoonnummer" placeholder="Telefoon nummer" required /></td>
		                </tr>
		                <tr>
		                	<td>Callsign:</td>
		                	<td><input type="text" name="callsign" placeholder="Callsign" required /></td>
		                </tr>
		                <tr>
			                <td></td>
			                <td><input type="submit" title="Verzenden"  value="Verzenden"/></td>
		                </tr>
	                </table>
	            </form>
	            <?php } else { ?>
	            <h1>Bedankt!</h1>
	            <p>Uw mail is verzonden naar Scouting Rurik en u heeft een bevestiging ontvangen voor de inschrijving</p>
	            <p>Hopelijk tot Unzer JotaFest ;) </p>
	            <?php } ?>
            </section>
	        <footer>
	            <div class="footerdiv">
	                <p>JotaFest @ Rurik Heiloo</p>
	            </div>
	        </footer>
        </div>
    </body>
</html>