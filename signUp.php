<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>

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
                        <a href="signUp.php">Sign Up</a>
                    </li>
					<li>
                        <a href="index.php">Home</a>
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

<center style="margin-top: 90px;">

	<h1>Sign Up</h1>
	
	<?php include 'include/signUp.php';?>

	<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
		<label for="name">Name</label>
		<input type="name" name="name" id="name" autofocus>
		<br>
		<label for="user">Username</label>
		<input type="user" name="username" id="username" required>
		<br>
		<label for="password">Password</label>
		<input type="password" name="password" required>
		<br>
		<label for="email">Email</label>
		<input type="email" name="email" id="email" required>
		<br>
		<label for="nationality">Nationality</label>
		<select name="nationality" required>
			<option value="english">English</option>
			<option value="german">German</option>
			<option value="french">French</option>
			<option value="spanish">Spanish</option>
		</select>
		<br>
		<div id="space">
			<input type="submit" value="Submit">
			<input type="reset" value="Reset">
		</div>
	</form>

</center>
</body>
</html>