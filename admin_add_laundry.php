<?php
include('Opp.php');
?>
<!-------------------------------------à revoir----------------------------------------->
<head>
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/editeur.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
</head>
<!------------------------------------------------------------------------------------------>
<!---------------------------------Header--------------------------------------------------->
<header id="header" class="skels-layers-fixed">
    <h1>
        <a href="admin.php">Member Area</a>
    </h1>
    <nav id="nav">
        <ul>
            <li>
                <a href="admin_ajout_laundry_W.php">Whasing Machine</a>
            </li>
            <li>
                <a href="admin_ajout_laundry_D.php">Dryer</a>
            </li>
            <li>
                <a href="index.php">Back</a>
            </li>
        </ul>
    </nav>
</header>
<!------------------------------------------------------------------------------------------>

<section id="two" class="wrapper style2 special">
    <div class="container">
        <header class="major">
            <h2>Add a Laundry</h2>
        </header>
        <ul class="actions">
            <li>
                <a href="admin_ajout_laundry_W.php" class="button big">Add a Washing Machine</a>
            </li>
            <li>
                <a href="admin_ajout_laundry_D.php" class="button special big">Add a Dryer</a>
            </li>
        </ul>
    </div>
</section>

