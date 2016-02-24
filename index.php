<?php session_start();?>
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

		<form action="<?php echo($_SERVER['PHP_SELF']); ?>" role="form-group" method="POST">
			<div class="form-group">
				<label for="user">Username</label>
				<input type="user" class="form-control" name="username" autofocus="" placeholder="Enter Name">
			</div>
			<br>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" placeholder="Enter Password">
			</div>
			<br>
			<div id="space">
				<input type="submit" value="Login">
				<input type="reset" value="Reset">
			</div>
			<a href="accountreset.php">Account Issues?</a>
		</form>
	</div>
</center>
</body>
</html>