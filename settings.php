<!DOCTYPE html>
<html lang="en">
<head>
<title>Settings Command Modern Air/Naval Operations (CMANO) PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Settings Command Modern Air/Naval Operations (CMANO) PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Settings Command Modern Air/Naval Operations (CMANO) PMC Tactical</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Settings</h2>

<p>
<b>Time Mode</b> options are pulsed (normal) and no pulse (fast).
</p>

<p>
<b>Game Speed</b> status indicator and button to options -> game speed page where settings can be changed. If background color is red it means your settings are causing performance loss, if its green it means performance is good.
</p>

<p>
If some of your window dialogs are messed up like too small new mission dialog, then you exit from the game, edit command.ini <i>NewMission</i> line (or completely delete command.ini file) and start game again and it should be fixed.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>Back to <a href="index.php">PMC CMANO root page</a></p>
<br><br>
<p><i>PMC CMANO 2015 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
