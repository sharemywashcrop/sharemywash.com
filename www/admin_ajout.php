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
    <h1> <a href="admin.php">Member Area</a></h1>
    <nav id="nav">
        <ul>
            <li> <a href="admin_ajout.php"> Add </a></li>
            <li><a href="admin_suppression.php">Delete</a></li>
            <li><a href="index.php">Back</a></li>
        </ul>
    </nav>
</header>
<?php
if (isset($_REQUEST['name']) && $_REQUEST['name'] != "" && isset($_REQUEST['email']) && $_REQUEST['email'] != "" ){
    // On récupère les information
    $name = mysql_real_escape_string($_REQUEST['name']);
    $email = mysql_real_escape_string($_REQUEST['email']);
    $location = mysql_real_escape_string(($_REQUEST['location']));
    $email = mysql_real_escape_string($_REQUEST['email']);
        $current = mysql_real_escape_string($_REQUEST['current']);
        $dryer = mysql_real_escape_string($_REQUEST['dryer']);
        $wmachine = mysql_real_escape_string($_REQUEST['wmachine']);
    // Date definie automatiquement
    $date = date("Y-m-d");
    // Insertion dans la table ANNONCES
    $opp = new Opp();
    $opp->addUser($name,$email,$location,$current,$dryer,$wmachine);
?>
<script>
    alert("Annonce créée");
</script>
<meta http-equiv="refresh" content="0; URL=admin_mod.php" />
<?php
}else {
?>


<section id="register" class="wrapper">
    <div class="container">
        <header id="register" class="major special">
            <h2>Add a laundry</h2>
            <p>Enter information here</p>
        </header>

        <form method="post" width="404" height="219" border="15" align="left">
                <input type="text" name="name" placeholder="Name"/>
                <input type="text" name="email" placeholder="email" />
                <input type="text" name="location" placeholder="location" />
                <input type="text" name="current" placeholder="current" />
                <input type="text" name="dryer" placeholder="dryer" />
                <input type="text" name="wmachine" placeholder="Wash Machine"/>*
                <input type="submit" value="Add" />
            </p>
        </form>
    </div>
</section>

<?php
}
?>
