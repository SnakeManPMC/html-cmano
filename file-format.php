<!DOCTYPE html>
<html>
<head>
<title>Command Modern Air/Naval Operations (CMANO) - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Command Modern Air/Naval Operations (CMANO) - PMC Tactical">
<META name="keywords" content="Command, Modern, Air, Naval, Operations, CMANO, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("../include/google-ads.php"); ?>
<?php include("../include/paypal.php"); ?>
<h1><b>PMC Tactical Command Modern Air/Naval Operations (CMANO)</b></h1>
</header>

<section>
<h2>Scenario File Format</h2>

<p>Scenarios are pure xml style text files.
</p>

<p>Great thing about this is that you can make git repositories for your scenario files, no changes get lost etc.
</p>

<h2>Campaigns File Format</h2>

<p>Campaigns are pure xml style text files which just point into individual scenarios this campaign contains. Scenario files listed in campaign need to be in the current campaigns directory.
</p>

<p>In one way it makes sense, you can have 100's of scenarios in your scenario dir and then just re-use them by copying selected scenarios over to campaign directory and creating a campaign file.
</p>

<p>However it somehow would feel more "full & compact" (difficult to explain) that campaign would be self contained package and not relying on other files, like what happens if one of these scenarios are renamed or deleted? Yep you have to copy them over and change file names in campaign etc.
</p>

</section>

<footer>
<p>Back to <a href="index.php">CMANO root page</a></p>
<?php include("../include/paypal.php"); ?>
<br><br>
<p><i>PMC CMANO 2015 - <?print(date("Y"));?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
