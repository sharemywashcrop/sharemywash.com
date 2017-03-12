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
                        <h2>Contact</h2>
                        <p>Want to contact us?</p>
                    </header>
                </div>




                <div></div>
                <p>
		Any questions, any requests, you are welcome to ask us! If you want, you are able to give us some feedback, we will be grateful for it. 
                </p>

            </div>
        </div>
    </section>
    <!-- Two -->
    <section id="two" class="wrapper style2">
 
    
        <div class="container 75%">
            <div class="row 200%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>Useful adresses:</h2>
                    </header>
                </div>




                <div></div>
                <p>
		Here are some adress mails to contact us easily:<br />
		Mathieu Ghirlanda: 16108802@brookes.ac.uk<br />
		Victoria Guehennec: 16108795@brookes.ac.uk<br />
		Thomas Michelot: 16108858@brookes.ac.uk<br />
                </p>

            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include"Foot.php" ?>
</body>
</html>
