<!DOCTYPE HTML>
<?php
header( 'content-type: text/html; charset=utf-8' );
?>
<html>
<head>
    <title>SMW</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.33.1/mapbox-gl.js'></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.33.1/mapbox-gl.css' rel='stylesheet' />
    </noscript>
</head>
<body class="landing">

    <!-- Header -->
    <header id="header" class="alt">

        <h1>
            <strong>
                <a href="index.php">Share My Wash</a>
            </strong>
        </h1>
        <?php include"Table.php"?>
    </header>


    <!-- One -->
    <section id="one" class="wrapper style1">
        <div class="container 75%">
            <div class="row 200%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>New User</h2>
                    </header>
                </div>




                <div></div>
                <p>
		Welcome to <b>Share My Wash</b> website! Maybe you have just downloaded our new application and would like to have some tips on how to use this new tool? Here you are!
                </p>

            </div>
        </div>
    </section>
    <!-- Two -->
    <section id="two" class="wrapper style2">


        <div class="container 75%">
            <div class="row 200%">
                <div class="">
                    <header class="major">
                        <h2>How to use application</h2>
                    </header>
                </div>




                <div></div>
                <p>
		First, you have to register with a username and a password. Secondly, you will have to update your location, so that we will be able to propose you the closest laundry.<br />
		Then, when you will need to do the laundry, you will be able to check the requests of other users, and see if someone wants to share his washing machine. If unfortunately there are not, no problem! We have the solution!<br />
You just have to create a new request, with the location of your favourite laundry, the remaining place in the washing machine, and of course, which washing machine you will use!<br />
                </p>

            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include"Foot.php" ?>
</body>
</html>
