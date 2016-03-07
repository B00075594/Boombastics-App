<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>   

	<link rel="icon" type="image/ico" href="images/icon.png">
	<style> @import "css/bootstrap.css";</style>
	<style> @import "css/bootstrap.min.css";</style>
	<script src="javaScript/jquery.js" type="text/javascript"></script>
	<script src="javaScript/bootstrap.js" type="text/javascript"></script>
	<script src="javaScript/bootstrap.min.js" type="text/javascript"></script>
	<style> @import "css/style.css";</style>
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
                        <a href="signUp.php">Sign up</a>
                    </li>
                    <li>
                        <a href="aboutNOTLOGIN.php">About</a>
                    </li>
                    <li>
                        <a href="contactNOTLOGIN.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<center>
	<div class="container">
		<img src="images/icon.png" class="img-responsive" id="user-default" width="200px">

		<br>
		<?php include 'header.php';?>
            <?php

                // checking for minimum PHP version
                if (version_compare(PHP_VERSION, '5.3.7', '<')) {
                    exit("Sorry, the system requires PHP version greater than 5.3.7 !");
                } else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
                    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
                    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
                    require_once("libraries/password_compatibility_library.php");
                }

                // include the configs / constants for the database connection
                require_once("config/db.php");

                // load the login class
                require_once("classes/Login.php");

                // create a login object. when this object is created, it will do all login/logout stuff automatically
                // so this single line handles the entire login process. in consequence, you can simply ...
                $login = new Login();

                // ... ask if we are logged in here:
                if ($login->isUserLoggedIn() == true) {
                    // the user is logged in. you can do whatever you want here.
                    // for demonstration purposes, we simply show the "you are logged in" view.
                    include("views/logged_in.php");

                } else {
                    // the user is not logged in. you can do whatever you want here.
                    // for demonstration purposes, we simply show the "you are not logged in" view.
                    include("views/not_logged_in.php");
                }
            ?>

	</div>
</center>
</body>
</html>
