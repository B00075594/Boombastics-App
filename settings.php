<?php session_start();?>
<?php include 'header.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Settings</title>

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
					    <a href="userHome.php">Home</a>
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

<center style="margin-top: 90px;">
<h1>Settings</h1>
<input type="button" onclick="window.location.href='password.php';" class="btn btn-default" id="button_size" value="Change Password">
<input type="button" onclick="window.location.href='email.php';" class="btn btn-default" id="button_size" value="Change Email">
<br>
<input type="button" onclick="window.location.href='username.php';" class="btn btn-default" id="button_size" value="Change Username">
<input type="button" onclick="window.location.href='lang.php';" class="btn btn-default" id="button_size" value="Change Languages">
<br>
<input type="button" onclick="window.location.href='userHome.php';" class="btn btn-default" id="button_size" value="Main Menu">
</center>
</body>
</html>