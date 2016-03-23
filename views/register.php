<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

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

<div class="container" style="margin-top: 70px;">

    <!-- register form -->
    <form method="post" action="register.php" name="registerform">

        <div class="form-group">
            <!-- the user name input field uses a HTML5 pattern check -->
            <label for="login_input_username">Username</label>
            <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
        </div>

        <div class="form-group">
            <!-- the email input field uses a HTML5 email type check -->
            <label for="login_input_email">E-mail</label>
            <input id="login_input_email" class="login_input" type="email" name="user_email" required />
        </div>

        <div class="form-group">
            <label for="login_input_password_new">Password (min. 6 characters)</label>
            <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
        </div>

        <div class="form-group">
            <label for="login_input_password_repeat">Repeat password</label>
            <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
                <select name="nationality" required>
                    <option value="english">English</option>
                    <option value="german">German</option>
                    <option value="french">French</option>
                    <option value="spanish">Spanish</option>
                </select>
        </div>
            <br>
            <div id="space">
                <input type="submit"  name="register" value="Register" />
                <input type="reset" value="Reset">
            </div>


    </form>
</div>
<!-- backlink -->
<center>
<a href="index.php">Back to Login Page</a>
</center>
</body>
</html>