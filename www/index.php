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

    <!-- Banner -->
    
    <section id="banner">

        <h2>Share My Wash</h2>

        <p></p>
        <p>by Ultra Team</p>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style1">
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            #map {
                position: static;
                top: 51%;
                bottom: 100%;
                height: 35%;
                width: 40%;
            }
        </style>
        <div class="container 75%">
            <div class="row 200%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>Share My Wash</h2>
                        <p>The good way to do the laundry</p>
                    </header>
                </div>
                <div id="map" class="6u$ 12u$(medium)">



                    <div>
                        <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoidWx0cmFlIiwiYSI6ImNqMDZiampoeDAwYWczM3AwMDc0MHRmaWMifQ.U0L3mZQ0BjC8e39irDppsQ';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v9',
                    center: [-1.224972, 51.754297],
                    zoom: 12
                });

                var radius = 20;

                function pointOnCircle() {
                    return {
                        "type": "Point",
                        "coordinates": [
                         -1.224972,
                         51.754297
                        ]
                    };
                }

                map.on('load', function () {

                    map.addSource('point', {
                        "type": "geojson",
                        "data": pointOnCircle()
                    });

                    map.addLayer({
                        "id": "point",
                        "source": "point",
                        "type": "circle",
                        "paint": {
                            "circle-radius": 5,
                            "circle-color": "#ff0000"
                        }
                    });
                });
                        </script>
                    </div>
                    <p>
                        Bla bla bla
                    </p>
                </div>
            </div>
       </div> 
    </section>
    <!-- Two -->
    <section id="two" class="wrapper style2">
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            #map {
                position: static;
                top: 51%;
                bottom: 100%;
                height: 35%;
                width: 40%;
            }
        </style>
        <div class="container 75%">
            <div class="row 200%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>What is it ?</h2>
                        <p>Wash Revolution Incoming</p>
                    </header>
                </div>
        



                    <div>
          
                    </div>
                    <p>
                        You are a student. You have to do your laundry, but your washing machine is not filled entirely? Do not worry about this anymore! <br />
                        With <b>Share My Wash</b>, you are now able to share your washing machine! Like this you can save a washing machine for others, but you can also share the fees.<br />
                        Not convinced ? OK, let's say you are a business man. You have a coffee spot on your sleeve and you have to clean it before your meeting? However, you have only this clothe to wash and you think that it is a waste of water to use it only for one thing? <b>Share My Wash</b> is there to help you and find someone with whom you can wash your sleeve!
			<br/>
Moreover, it is a way to socialize with others and maybe discover some interesting people! <br />
                    </p>
                
            </div>
        </div>
    </section>
                        <!-- Footer -->
                        <?php include"Foot.php" ?>
</body>
</html>
