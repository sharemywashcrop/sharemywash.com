<?php


namespace
{
	/**
	 * Connexion short summary.
	 *
	 * Connexion description.
	 *
	 * @version 1.0
	 * @author Math
	 */
	class Connexion
	{
        private $server;
        private $login;
        private $pass;
        private $codeSQL;
        private $dbName;
        private $connexion;

        public function connexion($newServer,$newdbName,$newLogin,$newPass)
        {
            $this -> login = $newLogin;
            $this -> pass = $newPass;
            $this -> server = $newServer;
            $this -> dbName = $newdbName;


            mysql_connect($newServer,$newLogin,$newPass);
            $this->$connexion = $connexionReussie = mysql_select_db($newdbName);

        }

        public function exucuteCode($codeSQL)
        {
            try{
                $this -> connexion ->exec($codeSQL);
            }
            catch(PDOException $e)
            {
                echo $e;
            }
        }

        public function add($name,$email,$location,$current,$dryer,$wMachine){
            $codeSQL = "INSERT INTO `sharemywash`.`USERS` (`id`, `Name`, `Email`, `Location`, `CurentLaundry`, `Dryer`, `WMachine`) VALUES (NULL, '$name', '$email', '$location', '$current', '$dryer', '$wMachine');";
            $req = mysql_query($codeSQL);
        }

        public function upDate($name,$cln,$var){
            $this -> $codeSQL = "UPDATE USERS FROM USERS SET ".$cln." = ".$var." WHERE Name = ".$name.";";
            $req = mysql_query($this->$codeSQL);
        }

        public function delete($cln,$var){
            $this -> $codeSQL = "DELETE FROM USERS WHERE ".$cln." = ".$var.";";
            $req = mysql_query($this->$codeSQL);
        }

        public function setCodeSQL($newCodeSQL){
            $this -> codeSQL = $newCodeSQL;
        }
	}
}