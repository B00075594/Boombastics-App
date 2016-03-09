<?php session_start();?>
<?php include 'header.php';?>
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
    <script src="javaScript/bootstrap-touch-carousel-master/dist/js/bootstrap-touch-carousel.js"></script>
    <script src="javaScript/bootstrap-touch-carousel-master/dist/css/bootstrap-touch-carousel.css"></script>
	<style> @import "css/style.css";</style>
	<script  src="javaScript/anamations.js" type="text/javascript"></script>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#732C7B">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               	<h1 id="title">Reboot Networking</h1>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="index.php?logout">Logout</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<?php include 'include/speak.php';?>
<div class="container_userHome">
	<center style="margin-top: 50px;">
        <img src="images/icon.png" alt="Logo" height="80" width="80" id="logo">
        <br>
        <img src="images/computerScreen.png" alt="Main Menu" id="computerImage">
            <div id="mainMenu">

            </div>
        <!--  Commented out for Revamp 02/03
		<h1>Main Menu</h1>
		<input type="button" onclick="window.location.href='logout.php';" class="btn btn-default" id="button_size" value="Logout">
		<input type="button" onclick="window.location.href='score.php';" class="btn btn-default" id="button_size" value="Score">
		<br>
		<input type="button" onclick="window.location.href='quiz.php';" class="btn btn-default" id="button_size" value="Quiz">
		<input type="button" onclick="window.location.href='settings.php';" class="btn btn-default" id="button_size" value="Settings">
	    -->

	</center>
</div>
</body>
</html>