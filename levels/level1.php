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

	<!-- TESTING ANIMATE -->
	<style> @import "../css/animate.css";</style>
	<!-- TESTING ANIMATE -->
</head>
<body>
<div class="animated fadeInDownBig">
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#732C7B">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 id="title">Reboot Networking</h1>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="../index.php?logout">Log Out</a>
                    </li>
                    <li>
                        <a href="../userHome.php">Home</a>
                    </li>
                    <li>
                        <a href="../about.php">About</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="../T&C.php">T&C</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    <center style="margin-top: 50px;">
        <div class="container">

            <div id="output">
            <div id="questions"></div>
            <div id="error"></div>
            <div id="result"></div>
            </div>

            <script type="text/javascript" src="level1config.js"></script>
    </center>
</div>
</body>
</html>