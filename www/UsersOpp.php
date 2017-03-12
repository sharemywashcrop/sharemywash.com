<?php



namespace
{
    include ("Connexion.php");
    class UsersOPP{
        private $name;
        private $email;
        private $location;
        private $current;
        private $dryer;
        private $wMachine;
        private $codeSQL;
        private $connexion;



        public function UsersOpp(/*$name,$email,$location,$current,$dryer,$wMachine*/){
          /*  $this -> $name = $name;
            $this -> $email = $email;
            $this -> $loacation = $location;
            $this -> $current = $current;
            $this -> $dryer = $dryer;
            $this -> $wMachine = $cwMachine;  */
        }



        public function add($name,$email,$location,$current,$dryer,$wMachine){
            $this -> $connexion = new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
            $this -> $codeSQL = "INSERT INTO USERS(Name, Email, Location, CurrentLaudry, Dryer, WMachine) VALUES('$name', '$email', '$location', '$current', '$dryer', '$wMachine')";
            $connexion -> execute($codeSQL);
        }

        public function upDate($name,$cln,$var){
            $this -> $connexion = new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
            $this -> $codeSQL = "UPDATE USERS FROM USERS SET ".$cln." = ".$var." WHERE Name = ".$name;
            $connexion -> execute($codeSQL);
        }

        public function delete($cln,$var){
            $this -> $connexion = new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
            $this -> $codeSQL = "DELETE FROM USERS WHERE ".$cln." = ".$var;
            $connexion -> execute($codeSQL);
        }


    }
}











?>