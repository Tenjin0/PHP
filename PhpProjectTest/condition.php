<?php

$age = 13;

if ($age <13){
    echo "Il a moins de ".$age." ans \n";
    $autorisation = false;
} else {
    echo "il a plus de ".$age." ans \n";
    $autorisation = true;
}
echo "</br>";
echo "autorisation ".$autorisation."</br>";

$totalLigne= 10;
for($ligne = 1 ; $ligne <=  $totalLigne ; $ligne++){
    
    echo "ceci est la ligne numero ".$ligne."</br>";
}
