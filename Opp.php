<?php
namespace{
    include("Connexion.php");
    class Opp{

        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
        public function addUser($name,$email,$location,$current,$dryer,$wMachine){
            $codeSQL = "INSERT INTO `sharemywash`.`USERS` (`id`, `Name`, `Email`, `Location`, `CurentLaundry`, `Dryer`, `WMachine`) VALUES (NULL, '$name', '$email', '$locatio', '$current', '$dryer', '$wMachine');";
            $req = mysql_query($codeSQL);
        }

        public function upDateUser($name,$cln,$var){
            $codeSQL = "UPDATE  `sharemywash`.`USERS` SET  `$cln` = `$var` WHERE `USERS`.`Name` = `$name`;";
            $req = mysql_query($codeSQL);
        }

        public function deleteUser($cln,$var){
            $codeSQL = "DELETE FROM `sharemywash`.`USERS` WHERE `$cln` = `$var`;";
            $req = mysql_query($codeSQL);
        }
        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
        public function addDMachines($belong,$available,$capacity,$space){
            $codeSQL = "INSERT INTO `sharemywash`.`DMACHINES` (`id`, `Belong`, `Capacity`, `Space`) VALUES (NULL, '$belong', '$available', '$capacity', '$space');";
            $req = mysql_query($codeSQL);
        }

        public function upDateDMachine($name,$cln,$var){
            $codeSQL = "UPDATE  `sharemywash`.`DMACHINES` SET  `$cln` = `$var` WHERE `USERS`.`Belong` = `$name`;";
            $req = mysql_query($codeSQL);
        }

        public function deleteDMachine($cln,$var){
            $codeSQL = "DELETE FROM `sharemywash`.`DMACHINES` WHERE `$cln` = '$var';";
            $req = mysql_query($codeSQL);
        }
        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
        public function addDMachinesaddDMachines($belong,$available,$capacity,$space){
            $codeSQL = "INSERT INTO `sharemywash`.`WMACHINES` (`id`, `Belong`, `Capacity`, `Space`) VALUES (NULL, '$belong', '$available', '$capacity', '$space');";
            $req = mysql_query($codeSQL);
        }

        public function upDateWMachine($name,$cln,$var){
            $codeSQL = "UPDATE  `sharemywash`.`WMACHINES` SET  `$cln` = `$var` WHERE `USERS`.`Belong` = `$name`;";
            $req = mysql_query($codeSQL);
        }

        public function deleteWMachine($cln,$var){
            $codeSQL = "DELETE FROM `sharemywash`.`WMACHINES` WHERE `$cln` = `$var`;";
            $req = mysql_query($codeSQL);
        }
        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
        public function addLaudry($location){
            $codeSQL = "INSERT INTO `sharemywash`.`Laudry` (`id`, `Location`) VALUES (NULL, '$location');";
            $req = mysql_query($codeSQL);
        }

        public function upDateLaudry($name,$cln,$var){
            $codeSQL = "UPDATE  `sharemywash`.`Laudry` SET  `$cln` = `$var` WHERE `USERS`.`Location` = `$name`;";
            $req = mysql_query($codeSQL);
        }

        public function deleteLaudry($cln,$var){
            $codeSQL = "DELETE FROM `sharemywash`.`Laudry` WHERE `$cln` = `$var`;";
            $req = mysql_query($codeSQL);
        }
        /* --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
    }
}


?>