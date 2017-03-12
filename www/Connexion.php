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
            try{
                $newConnexion = new PDO("mysql:host=$newServer;dbname=$newdbName",$newLogin,$newPass);
                $newConnexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this ->connexion = $newConnexion;
            }
            catch(PDOException $e)
            {
                echo $e->getMessage;
            }
            
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

        public function insert($table,$userName,$userPass,$email)
        {
            try{
                $connexion = new PDO("mysql:host=$this -> Server;dbname=$this -> newdbName",$this ->login ,$this ->login);
                $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $requete = $connexion->prepare("INSERT INTO $table (nom,pass,email)
                                                VALUES(:nom,:pass,:email)");
                $requete-> bindParam(':nom',$userName);
                $requete-> bindParam(':pass',$userPass);
                $requete-> bindParam(':email',$email);
                $requete -> execute();
            }
            catch(PDOException $e)
            {
                echo $e->getMessage;
            }
        }

        public function setCodeSQL($newCodeSQL){
            $this -> codeSQL = $newCodeSQL;
        }
	}
}