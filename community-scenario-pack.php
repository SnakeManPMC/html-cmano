<!DOCTYPE html>
<html lang="en">
<head>
<title>Community Scenario Pack Command Modern Air/Naval Operations (CMANO) PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Community Scenario Pack Command Modern Air/Naval Operations (CMANO) PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Community Scenario Pack Command Modern Air/Naval Operations (CMANO) PMC Tactical</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Community Scenario Pack</h2>

<p>
Download community scenario pack, database images and descriptions from <a href="https://command.matrixgames.com/?page_id=1876" target="_blank">command.matrixgames.com/?page_id=1876</a>. Database images are really large, cold war (CWDB.zip) is 1.5gb and modern (DB3000.zip) is 3.1gb file size.
</p>

<p>
Yes these downloads are provided as stupid PkZip file format, guess the CMANO boys are not up to date on compression/packing software, eh? :)
</p>

<p>
Below example uses my own drive and directory path, yours can be different as long as its not in windows desktop or any other illegal characters including directory name.
</p>

<p>
Community scenario pack install. Unpack stupid CommunityScenarioPack047.zip into CommunityScenarioPack047/ dir, then from that dir pack it properly with 7-zip into CommunityScenarioPack047.7z and store to D:\Gaming_DVD_2011\CMANO\Scenarios\ dir. Move CommunityScenarioPack047/ dir to C:\Games\CMANO\Scenarios\ dir. Move CommunityScenarioPack047/Lua/ dir to C:\Games\CMANO\ dir (overwriting old Lua/ dir), in this lua dir there was caribbean fury subdir, apparently only one scenario (series?) uses these scripts.
</p>

<p>
All done, scenario pack installed.
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
