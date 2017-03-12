<?php
include("Connexion.php");
$connexion =  new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
$connexion->addUser("Jean Jacques","jj@jeanjacques.com","qsdf","qdsf",5,10);
?>