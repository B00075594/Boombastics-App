<?php
if(isset($_POST['password']))
{
	$username = $_SESSION["username"];
	$password = $_POST['password'];
	$newpassword = $_POST['newpassword'];
	require_once("include/db_connect.php");
	$db_link = db_connect("majorgroupproject");
	$self = $_SERVER['PHP_SELF'];


	$result = @mysql_query("Select *
	From users
	WHERE username LIKE '$username'
	AND password LIKE '$password'");

	$fields = mysql_list_fields("majorgroupproject","users");
	$num_cols = mysql_num_fields($fields);

	if(mysql_num_rows($result)>0)
	{
		while($row = mysql_fetch_array($result))
		{


			/*$query ="UPDATE 'users'
			SET 'password' = '$newpassword'
			WHERE 'username' ='$username'";*/


			$query="UPDATE users
			SET password='$newpassword'
			WHERE username='$username'";


			/*$query = "UPDATE users
			SET 'password' = '$newpassword'
			WHERE 'username' = '$username'";*/
			$result = mysql_query($query) or die("SQL query failed");
			mysql_close($db_link);

			$_SESSION["password"]=$newpassword;

			header('Location: userHome.php');
			/**************** CHANGE PASSWORD SQL CODE GOES HERE!! *******************/
		}
	}
	else{
	echo "<span style='color:red;'>Sorry could not get results!!</span><br>";
	echo "<p style='color:red;'>Or wrong password used for this account</p>";
	}
}
?>