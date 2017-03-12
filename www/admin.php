
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>INTERIM CORSE</title>

    <?php
include('../actions/connexion.php');

//Moteur de recherche
if(isset($_REQUEST['recherche']) and $_REQUEST['recherche'] != ""){
    $sql = 'SELECT * FROM ANNONCES WHERE CONTRAT = \''.mysql_real_escape_string($_REQUEST['recherche']).'\'';
    if(isset($_REQUEST['recherche2']) and $_REQUEST['recherche2'] != ""){
        $sql .= ' AND CATEGORIE = \''.mysql_real_escape_string($_REQUEST['recherche2']).'\'';
    }
}elseif(isset($_REQUEST['recherche2']) and $_REQUEST['recherche2'] != ""){
    $sql = 'SELECT * FROM ANNONCES WHERE CATEGORIE = \''.mysql_real_escape_string($_REQUEST['recherche2']).'\'';
    if(isset($_REQUEST['recherche']) and $_REQUEST['recherche'] != ""){
        $sql.= ' AND CONTRAT = \''.mysql_real_escape_string($_REQUEST['recherche']).'\'';
    }
}else{
    $sql = 'SELECT * FROM ANNONCES';
}

// on envoie la requ�te
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

    ?>
<!-------------------------------------Reuperation des scripts et pages CSS----------------------------------------->

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

<!----------------------------------------------------------------------------------------------------------------->

    </head>
<body>
<!--------------------------------------Header---------------------------------------------->
<header id="header" class="skels-layers-fixed">
    <h1> <a href="admin.php">Section administration</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="annonces_liste.php">Retourner aux annonces</a></li>
        </ul>
    </nav>
</header>
<!-------------------------------------------------------------------------------------------->


    <?php
    if(isset($_REQUEST['num']) && isset($_REQUEST['envoyer'])){

    // On recup�re le num�ro
    $num = mysql_real_escape_string($_REQUEST['num']);
    // On envoie supprimer l'entr� voulu
    $sql = "DELETE FROM `interimcdl562`.`ANNONCES` WHERE `ANNONCES`.`NUM` = $num";
    $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
    ?>
    <script>
        alert("Annonce supprim�e");
    </script>
    <meta http-equiv="refresh" content="0; URL=admin.php" />
    <?php
    }elseif(isset($_REQUEST['num']) && isset($_REQUEST['modifier'])) {
        $num = $_REQUEST['num'];
        header("Location : admin_modifier.php?num=$num");

    }elseif(isset($_REQUEST['num']) && isset($_REQUEST['ajouter'])){
        header("Location : admin_ajout.php");
    }else{
       
    ?>
    
    <form id="AJOUTER" method="post" align="center" class="container">
                                    <input type="hidden" name="num" value="<?php echo $data['NUM'];?>" />
                                    <input type="submit" name="ajouter" class="button big" value="Ajouter une annonce" />
                                </form>


       <!-- Formulaire moteur de recherche dynamique -->
       <form method="post" action="annonces_liste.php" width="404" height="219" border="15" align="right" class="container">
        <p>
            
            <select name="recherche">
                <option value="">Type de contrat</option>
                <option value="">Tout contrat</option>
                <?php
        $sqlOption = "SELECT DISTINCT `CONTRAT` FROM `ANNONCES`";
        $reqOption = mysql_query($sqlOption) or die('Erreur SQL !<br>'.$sqlOption.'<br>'.mysql_error());
        while($data = mysql_fetch_assoc($reqOption)){
            $contrat = mysql_real_escape_string($data['CONTRAT']);
            
            echo '<option value ="$contrat">'.$contrat.'</option>';
        }
                ?>
            </select>
            <select name="recherche2">
                <option value="">Categorie</option>
                <option value="">Toute categorie</option>
                   <?php
        $sqlOption = "SELECT DISTINCT `CATEGORIE` FROM `ANNONCES`";
        $reqOption = mysql_query($sqlOption) or die('Erreur SQL !<br>'.$sqlOption.'<br>'.mysql_error());
        while($data = mysql_fetch_assoc($reqOption)){
            $categorie = mysql_real_escape_string($data['CATEGORIE']);
            echo '<option value ="$categorie">'.$categorie.'</option>';
        }
                   ?>
            </select>
            <input type="submit" value="Rechercher" />

        </p>
    </form>
    <!----------------->


    <?php

	$i=1;
	$n=3;
    ?>
    <div class="table-wrapper">
        <table width="404" height="219" border="0" align="center" class="container">
            <?PHP
	while($data = mysql_fetch_assoc($req))
    { if($i==1){
            ?>

            <TR align="center" valign="middle" class="12u$(xsmall)">
                <?PHP }?>

                <td width="398" height="215" class="container">
                    <table width="392" height="203" border="2" class="alt">
                        <tr>
                            <td width="290">
                                <div id="categorie">
                                    <?php echo "Categorie de l'offre: ".$data['CATEGORIE'];?>
                                </div>
                            </td>
                            <td width="100">
                                <div id="contrat">
                                    <?php echo $data['CONTRAT'];?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="170" colspan="2">
                                <div id="libele">
                                <?php echo $data['LIBELE'];?>
                                    </div>
                            </td>

                        </tr>
                        <tr>
                            <td height="25" colspan="2">
                                <form id="MODIFIER/SUPPRIMER" method="post">
                                    <input type="hidden" name="num" value="<?php echo $data['NUM'];?>" />
                                    <input type="submit" name="modifier" class="button" value="Modifier l'annonce" />
                                    <input type="submit" name="envoyer" class="button special" value="Supprimer l'annonce" />
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
                <?PHP
        if($i==$n){
                ?>
            </TR>

            <?PHP
 }
	 	if($i<$n){$i++;}else{$i=1;};
	}
            ?>
        </table>
    </div>

</body>
<?php
}
?>

</html>
