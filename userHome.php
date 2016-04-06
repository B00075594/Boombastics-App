<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>

	<link rel="icon" type="image/ico" href="images/icon.png">
	<style> @import "css/bootstrap.css";</style>
	<style> @import "css/bootstrap.min.css";</style>
	<script src="javaScript/jquery.js" type="text/javascript"></script>
	<script src="javaScript/bootstrap.js" type="text/javascript"></script>
	<script src="javaScript/bootstrap.min.js" type="text/javascript"></script>
	<style> @import "css/style.css";</style>
	<script  src="javaScript/anamations.js" type="text/javascript"></script>
</head>
<body>

    <?php include 'include/headerLOGIN.php';?>

	<?php include 'include/speak.php';?>
<div class="container">
	<center style="margin-top: 50px;">
		<h1>Main Menu</h1>
    		<input type="button" onclick="window.location.href='index.php?logout';" class="btn btn-default" id="button_size" value="Logout">
    		<input type="button" onclick="window.location.href='score.php';" class="btn btn-default" id="button_size" value="Score">
    		<br>
    		<input type="button" onclick="window.location.href='quiz.php';" class="btn btn-default" id="button_size" value="Quiz">
    		<input type="button" onclick="window.location.href='settings.php';" class="btn btn-default" id="button_size" value="Settings">
    </center>
</div>
</body>
</html>