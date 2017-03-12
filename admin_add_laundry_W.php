<?php
include('Opp.php');
?>
<!-------------------------------------Scripts/CSS----------------------------------------->
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
<header id="header" class="skels-layers-fixed">
    <h1>
        <a href="admin.php">Member Area</a>
    </h1>
    <nav id="nav">
        <ul>
            <li>
                <a href="admin_ajout.php">Add </a>
            </li>
            <li>
                <a href="admin_suppression.php">Delete</a>
            </li>
            <li>
                <a href="index.php">Back</a>
            </li>
        </ul>
    </nav>
</header>
<?php
if (isset($_REQUEST['name']) && $_REQUEST['name'] != "" && isset($_REQUEST['email']) && $_REQUEST['email'] != "" ){
    // On récupère les information
    $belong = mysql_real_escape_string($_REQUEST['belong']);
    $available = mysql_real_escape_string($_REQUEST['available']);
    $capacity = mysql_real_escape_string($_REQUEST['capacity']);
    $space = mysql_real_escape_string($_REQUEST['space']);
    $opp = new Opp();
    $opp->addWMachines($belong,$available,$capacity,$space);
?>
<script>
    alert("Done");
</script>
<meta http-equiv="refresh" content="0; URL=admin_mod.php" />
<?php
}else {
?>


<section id="register" class="wrapper">
    <div class="container">
        <header id="register" class="major special">
            <h2>Add a Washing Machine</h2>
            <p>Enter information here</p>
        </header>

        <form method="post" width="404" height="219" border="15" align="left">
            <input type="text" name="belong" placeholder="Belong to" />
            <input type="text" name="available" placeholder="Is it available ?" />
            <input type="number" name="capacity" placeholder="Capacity" />
            <input type="number" name="space" placeholder="Space left" />
            <input type="submit" value="Add" />

        </form>
    </div>
</section>

<?php
}
?>
