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
                <a href="index.php">Share My Wash</a>
            </strong>
        </h1>
        <?php include"Table.php"?>
    </header>

    <!-- Banner -->
    <section id="banner">
        <h2>Share My Wash 2</h2>
        
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
                        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.33.1/mapbox-gl.js'></script>
                        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.33.1/mapbox-gl.css' rel='stylesheet' />
                        <style>
                            body {
                                margin: 0;
                                padding: 0;
                            }
                            #map {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                width: 100%;
                            }
                        </style>

                        <div id='map'></div>
                            <script>
                                    mapboxgl.accessToken = 'pk.eyJ1IjoidWx0cmFlIiwiYSI6ImNqMDZiampoeDAwYWczM3AwMDc0MHRmaWMifQ.U0L3mZQ0BjC8e39irDppsQ';
                                    var map = new mapboxgl.Map({
                                                                    container: 'map', // container id
                                                                    style: 'mapbox://styles/mapbox/streets-v9', //stylesheet location
                                                                    center: [51.75, -1.274280], // starting position
                                                                    zoom: 9 // starting zoom
                                                                });
                            </script>
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