<?php
function willekeurigPostcode()
{
    //4 willekeurige cijfers
    echo rand(1000,9999);

$stringtekst = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

//2 willekeurige tekens (str_shuffle) van de stringtext (substr)
$random = substr(str_shuffle($stringtekst), 0, 2);

//toon de tekens
echo $random;
}

willekeurigPostcode();
?>