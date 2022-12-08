<?php
function omtrek(){
    $pi = (pi());
    //lengte veld lengte uitlezen en de waarde in een variable zetten.
    $lengte = $_POST['lengte'];
    $diameter = $lengte * 2;
    $som = $diameter * $pi;

    //number format maakt 1 decimaal van
    $antwoord = number_format($som, 1);
    echo "De omtrek van een cirkel met straal $lengte is : $antwoord</br>";
}
function oppervlakte(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $som = $lengte * $lengte * $pi;
    $antwoord = number_format($som, 1);
    echo "De opppervlakte van een cirkel met straal $lengte is : $antwoord</br>";
}
//controleren met isset of er gekozen is voor een knop
if(isset($_POST['omtrek'])){
    omtrek();
}
if(isset($_POST['opppervlakte'])){
    oppervlakte();
}
?>

<form method="post">
<input type="number" name="lengte" placeholder="Geef de lengte van de cirkel aan" requird/>
<input type="submit" name="omtrek" value=omtrek/>
<input type="submit" value="oppervlakte"/>  
</form>