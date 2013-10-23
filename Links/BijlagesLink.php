<?php
	$date = time();
	date_default_timezone_set('DST');
	$bijlagesStart = strtotime('2013-10-19 19:00:00');
	if ($date > $bijlagesStart) {
?>
<li><a href="/bijlages.php">Bijlages</a></li>
<?php
	}
?>

