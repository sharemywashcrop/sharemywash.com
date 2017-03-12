<?php
mysql_connect("198.100.148.10","sharemywash","epitaepita");
$connexionReussie = mysql_select_db("sharemywash");

/*
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
 */
?>