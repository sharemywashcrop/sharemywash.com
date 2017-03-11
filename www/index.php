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
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
</head>
<body class="landing">

    <!-- Header -->
    <header id="header" class="alt">
        <img src="image/telechargement.jpg" />
        <h1>
            <strong>
                <a href="index.html">Share My Wash</a>
            </strong>
        </h1>
        <?php include"Table.php"?>
    </header>

    <!-- Banner -->
    <section id="banner">
        <h2>Share My Wash</h2>
        
        <p></p>
        <p>by Ultra Team</p>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style1">
        <div class="container 75%">
            <div class="row 200%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>Share My Wash</h2>
                        <p>A good way to wash his laundry</p>
                    </header>
                </div>
                <div class="6u$ 12u$(medium)">
                    <p>
                        Bla bla bla
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include"Foot.php" ?>
</body>
</html>