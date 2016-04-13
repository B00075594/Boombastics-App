<?php session_start();?>
<?php include 'header.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz</title>

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

<center style="margin-top: 90px;">
<h1>Quiz</h1>
	<button type = "button" class = "btn btn-primary btn-lg btn-block" id="button_color" onclick="window.location.href='levels/level1.php';">
		Level 1
	</button>
	<button type = "button" class = "btn btn-primary btn-lg btn-block" id="button_color" onclick="window.location.href='level2.php';" disabled>
		Level 2
	</button>
	<button type = "button" class = "btn btn-primary btn-lg btn-block" id="button_color" onclick="window.location.href='level3.php';" disabled>
		Level 3
	</button>
	<button type = "button" class = "btn btn-primary btn-lg btn-block" id="button_color" onclick="window.location.href='userHome.php';">
		Main Menu
	</button>

<!--<input type="button" onclick="window.location.href='levels/level1.php';" class="btn btn-default" id ="button_size" value="Level 1">
<input type="button" onclick="window.location.href='level2.php';" class="btn btn-default" id ="button_size" value="Level 2" disabled>
<br>
<input type="button" onclick="window.location.href='level3.php';" class="btn btn-default" id ="button_size" value="Level 3" disabled>
<input type="button" onclick="window.location.href='userHome.php';" class="btn btn-default" id ="button_size" value="Main Menu">-->

</center>
</body>
</html>