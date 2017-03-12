<?php

namespace
{
    include ("Connexion.php");

    class UsersOPP
    {
        public function UsersOpp(){
        }

        public function add($newUSers){
            $this -> $connexion = new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
            $this -> $codeSQL = "INSERT INTO LAUDRY(Name, Email, Location, CurrentLaudry, Dryer, WMachine) VALUES('$name', '$email', '$location', '$current', '$dryer', '$wMachine')";
            $connexion -> execute($codeSQL);
        }

        public function upDate($name,$cln,$var){
            $this -> $connexion = new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
            $this -> $codeSQL = "UPDATE LAUDRY SET ".$cln." = ".$var." WHERE Name = ".$name;
            $connexion -> execute($codeSQL);
        }

        public function delete($cln,$var){
            $this -> $connexion = new Connexion("198.100.148.10","sharemywash","sharemywash","epitaepita");
            $this -> $codeSQL = "DELETE FROM USERS WHERE ".$cln." = ".$var;
            $connexion -> execute($codeSQL);
        }
    }
}
