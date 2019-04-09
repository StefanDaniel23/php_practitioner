<?php

$animals = ['caine', 'pisica'];

function dd($data) {
echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}
//$Varsta = [14];

function verificare_varsta($Ani) {
    if ($Ani >= 21) {
        echo "Acces Permis";
    } else {
        echo "Interzis Accesul, nu ai varsta necesara.";
    }
}


verificare_varsta(40);
