<?php session_start();?>
<?php include 'header.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>

	<link rel="icon" type="image/ico" href="images/icon.png">
	<style> @import "css/bootstrap.css";</style>
	<style> @import "css/bootstrap.min.css";</style>
	<script src="javaScript/jquery.js" type="text/javascript"></script>
	<script src="javaScript/bootstrap.js" type="text/javascript"></script>
	<script src="javaScript/bootstrap.min.js" type="text/javascript"></script>
	<style> @import "css/style.css";</style>
</head>
<body>

<?php include 'include/headerLOGIN.php';?>

<center style="margin-top: 90px;">
<h1>Change Language</h1>
<?php include 'include/lang.php';?>

<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
	<select name="nationality">
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
<p>Click <a href="settings.php">here</a> to go back to settings</p>
</center>
</body>
</html>