<?php

function dd($data) {
echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}


function verificare_varsta_intrare_in_club($varsta) {
  if ($varsta >= 21) {
    echo 'acces permis';
  } else  {
    echo 'nu ai varsta necesara';
  }
}
