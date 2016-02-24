<?php include '../header.php';?>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$rightAnswer = 0;
$wrongAnswer = 0;

require_once('functions_list.php');
require_once('quiz.php');


if (isset($_POST['submit'])){
  foreach($_POST['response'] as $key => $value){
      if($correctAnswerArray[$key] == $value){
          $rightAnswer++;
      } else {
          $wrongAnswer++;
      }
  }
}
if($rightAnswer==10)
{
	echo "<audio controls autoplay src = '../media/langs/english/hello.mp3' hidden='true'></audio>";
}
if($wrongAnswer!=0)
{
	echo "<audio controls autoplay src = '../media/langs/english/bye.mp3' hidden='true'></audio>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Quiz</title>

	<link rel="icon" type="image/ico" href="../images/icon.png">
	<!--<style> @import "../css/bootstrap.css";</style>
	<style> @import "../css/bootstrap.min.css";</style>
	<script src="../javaScript/jquery.js" type="text/javascript"></script>
	<script src="../javaScript/bootstrap.js" type="text/javascript"></script>
	<script src="../javaScript/bootstrap.min.js" type="text/javascript"></script>
	-->

	<!-- New files testing with questions layout -->
	<link rel="stylesheet" href="../jquerymobile/jquery.mobile-1.4.5.min.css">
	<script src="../javaScript/jquery.js"></script>
	<script src="../jquerymobile/jquery.mobile-1.4.5.min.js"></script>


	<!-- :D  -->

	<script>
		function test(){
			window.location.replace("level1.php");
		}
	</script>
	<style>
		#header {
			background-color:white;
			border-radius:10pt;
			padding: 1em;
			margin-left:10%;
		}
	</style>
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
                        <a href="../logout.php">Log Out</a>
                    </li>
                    <li>
                        <a href="../about.php">About</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
     <div class="container" style="margin-top: 90px;">
<h1 id="header">Level 1</h1>
<!-- //Display result-->
    <?php
       if ($rightAnswer > 0){ ?>
           <h2><span class="label label-success">You have <?php echo $rightAnswer; ?> correct answers</span></h2>
           <?php }
        if ($wrongAnswer > 0) { ?>
           <h2><span class="label label-danger">You have <?php echo $wrongAnswer; ?> wrong answers</span></h2><br>
           <?php
        }
     ?>

<!--Display form-->
<form action="#" method="POST">
	<fieldset data-role="controlgroup">
	<?php
	foreach($questions as $id => $question)
	{
		echo "<h4>$question</h4>"."<ol>";

		$randomChoices = $choices[$id];
		$randomChoices = shuffle_assoc($randomChoices);
		foreach ($randomChoices as $key => $values)
			{
                echo '    <li>
                                <input type="radio" name="radio-choice['.$id.']" id="'.$id.'" value="'.$values.'" required />
                                <label name="label for '.$id.'" value="'.$values.'">'.$values.'</label>
	                      </li><br>';
            }
            echo("</ol>");
    }
    ?>
    </fieldset>

    <input type="submit" name="submit" class="btn btn-primary" value="Submit Quiz" />
	<br>
	<input type="reset" name="reset" class="btn btn-primary" value="Reset Quiz" onclick="test();" />
	<br>
</form>>
	<a href="#">Back to Top</a>
	<br>
	<a href="../quiz.php">Back to Quiz Menu</a>
	</div>
	<br>
	<br>
</body>
</html>