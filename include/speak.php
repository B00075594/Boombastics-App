<?php
	$user_name = $_SESSION["user_name"];
	// require_once("include/db_connect.php");
	require_once("config/db.php");

	// $db_link = db_connect("majorgroupproject");
	// $db_link = db_connection("majorgroupproject");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$self = $_SERVER['PHP_SELF'];
	
	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	 
	$query = "SELECT user_name, Nationality
	            FROM users
	            WHERE user_name = '" . $user_name . "' OR Nationality = '" . $user_name . "';";

	if ($result = $mysqli->query($query)) {

	    /* fetch object array */
	    while ($obj = $result->fetch_object()) {
	        printf ("%s (%s)\n", $obj->user_name, $obj->Nationality);

			$speak = $obj->Nationality;
			
			if($speak=="english")
			{
				echo "<audio controls autoplay src = './media/langs/english/hello.mp3' hidden='true'></audio>";
			}
			if($speak=="spanish")
			{
				echo "<audio controls autoplay src = './media/langs/spanish/hola.mp3' hidden='true'></audio>";
			}
			else
			{
				echo "<audio controls autoplay src = './media/langs/english/hello.mp3' hidden='true'></audio>";
			}

	    }
	    /* free result set */
	    $result->close();
	}
		
?>