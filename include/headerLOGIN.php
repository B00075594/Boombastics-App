<?php

echo '<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#732C7B">';
    echo '<div class="container">';
        echo '<div class="navbar-header page-scroll">';
            echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
                echo '<span class="sr-only">Toggle navigation</span>';
                echo '<span class="icon-bar"></span>';
                echo '<span class="icon-bar"></span>';
                echo '<span class="icon-bar"></span>';
            echo '</button>';
            echo '<h1 id="title">Reboot Networking</h1>';
        echo '</div>';

            echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
                echo '<ul class="nav navbar-nav navbar-right">';
                    echo '<li class="hidden">';
                        echo '<a href="#page-top"></a>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="logout.php">Log Out</a>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="userHome.php">Home</a>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="about.php">About</a>';
                    echo '</li>';
                    echo '<li>';
                        echo '<a href="contact.php">Contact</a>';
                    echo '</li>';
                echo '</ul>';
            echo '</div>';
    echo '</div>';
echo '</nav>';
?>