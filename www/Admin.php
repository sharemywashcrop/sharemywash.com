<?php
include("Connexion.php");
$codeSQL = "INSERT INTO `sharemywash`.`USERS` (`id`, `Name`, `Email`, `Location`, `CurentLaundry`, `Dryer`, `WMachine`) VALUES (NULL, '$name', '$email', '$location', '$current', '$dryer', '$wMachine');";
$req = mysql_query($codeSQL) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
echo "ok";
?>