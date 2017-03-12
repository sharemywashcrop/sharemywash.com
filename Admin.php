<?php
include("Connexion.php");
$codeSQL = "INSERT INTO `sharemywash`.`USERS` (`id`, `Name`, `Email`, `Location`, `CurentLaundry`, `Dryer`, `WMachine`) VALUES (NULL, '$name', '$email', '$location', '$current', '$dryer', '$wMachine');";
$req = mysql_query($codeSQL);
echo "ok";
?>