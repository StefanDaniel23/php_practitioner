<?php

function fetchAllTasks($pdo)
{
$statement = $pdo->prepare('select * from todos');

$statement->execute();

return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

echo "ceva";

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
