<?php
session_start(); /// function to start a php session


//controleren of er al een sessie is
if(isset($_SESSION['teller'])){


//teller verhogen met 1; ++
$_SESSION['teller']++;
}
else // nieuwe teller laten starten bij 1.
{
    $_SESSION['teller'] = 1;
}
//bericht met het aantal bezoeken.
$bericht="U heeft deze pagina" . $_SESSION['teller']. "keer bekeken";
print $bericht;


?>

