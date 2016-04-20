<?php session_start();?>
<?php include '../header.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Level 1</title>

	<link rel="icon" type="../image/ico" href="images/icon.png">
	<style> @import "../css/bootstrap.css";</style>
	<style> @import "../css/bootstrap.min.css";</style>
	<script src="../javaScript/jquery.js" type="text/javascript"></script>
	<script src="../javaScript/bootstrap.js" type="text/javascript"></script>
	<script src="../javaScript/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../javaScript/external/mootools-core-1.4.5-minified.js"></script>
	<script type="text/javascript" src="../javaScript/dg-quiz-maker.js"></script>


	<!--<style> @import "../css/style.css" </style> -->
	<style> @import "../css/questionsstyle.css" </style>

</head>
<body>

<?php include '../include/headerLOGIN.php';?>

<center style="margin-top: 50px;">
	<div class="container">

		<div id="output">
		<div id="questions"></div>
		<div id="error"></div>
		<div id="result"></div>
		</div>
		<script type="text/javascript" src="level1config.js"></script>



</center>
</body>
</html>