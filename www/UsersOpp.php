<?php
include ("Connexion.php");


namespace
{
    class UsersOPP{
        private $name;
        private $email;
        private $location;
        private $current;
        private $dryer;
        private $wMachine;
        private $codeSQL;
        private $connexion;



        public function UsersOpp($name,$email,$location,$current,$dryer,$wMachine){
            $this -> $name = $name;
            $this -> $email = $email;
            $this -> $loacation = $location;
            $this -> $current = $current;
            $this -> $dryer = $dryer;
            $this -> $wMachine = $cwMachine;
        }

        public function upDate($var){
            $this -> $var = $var;
        }

        public function delete($cln,$var){
            $this -> $connexion = new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
            $this -> $codeSQL = "DELETE FROM USERS WHERE ".$cln." = ".$var;
            $connexion -> execute($codeSQL);
        }

        public function add($newUSers){
            $this -> $connexion = new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
            $this -> $codeSQL = "ADD FROM USERS WHERE ".$cln." = ".$var;
            $connexion -> execute($codeSQL);
        }
    }
}











?>