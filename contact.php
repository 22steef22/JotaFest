<?php
	$contactform = false;
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if (isset($_REQUEST['naam']))
			{
				if (isset($_REQUEST['email']))
				{
					if (isset($_REQUEST['vraag']))
						{
							$email = $_REQUEST['email'] ;
							$naam = $_REQUEST['naam'] ;
							$vraag = $_REQUEST['vraag'] ;
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
							$mail->AddAddress('jotakreuze@gmail.com', 'Scouting Rurik');  // Add a recipient
									
							$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
							$mail->IsHTML(true);                                  // Set email format to HTML
									
							$mail->Subject = 'JotaFest 2013 Vraag';
							$mail->Body    = 'Naam: ' . $naam . ' <br /> Email: ' . $email . '<br /> controle gegevens:<br />Vraag: ' . $vraag;
									
							if(!$mail->Send()) {
							   echo 'Message could not be sent.';
							   echo 'Mailer Error: ' . $mail->ErrorInfo;
							   exit;
							}									
						} else {
							?>
								<script type="text/javascript">
									alert("Geef een geldige naam op!");
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
						alert("Geef een geldige vraag op!");
					</script>
		    	<?php
				}
			} else {
				$contactform = true;
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
	                    <?php include_once("Links/DeelnemersLink.php") ?>
	                    <?php include_once("Links/InformatieLink.php") ?>
	                    <?php include_once("Links/BijlagesLink.php") ?>
	                    <?php include_once("Links/LivestreamLink.php") ?>
	                    <?php include_once("Links/UitslagLink.php") ?>
	                    <li class="selected"><a class="selected" href="/contact.php">Contact</a></li>
	                </ul>
	            </nav>
	            <div class="twitterclass">
					<a class="twitter-timeline" href="https://twitter.com/RurikCross" data-widget-id="375341628010942464">Tweets by @RurikCross</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
          	</div>
            <section class="main-content">
	            <?php if($contactform) { ?>
	            <h1>Contact</h1>
	            <p>Vragen? stuur ons snel een berichtje en we reageren nog sneller</p>
	            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	                <table>
		                <tr>
		                	<td>Naam:</td>
		                	<td><input type="text" name="naam" placeholder="Naam" required /></td>
		                </tr>
		                <tr>
		                	<td>Email:</td>
		                	<td><input type="email" name="email" placeholder="Email" required /></td>
		                </tr>
		                <tr>
		                	<td>Vraag:</td>
		                	<td><textarea id="styled" name="vraag" placeholder="Uw Vraag" required></textarea></td>
		                </tr>
		                <tr>
			                <td></td>
			                <td><input type="submit" title="Verzenden" value="Verzenden"/></td>
		                </tr>
	                </table>
	            </form>
	            <?php } else { ?>
	            <h1>Bedankt!</h1>
	            <p>Uw bericht is verzonden naar Scouting Rurik</p>
	            <p>Uw vraag wordt zo snel mogelijk beantwoord.</p>
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