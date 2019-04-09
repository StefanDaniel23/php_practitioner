<?php
require_once('config.php');
// Selectare dare din baza de date
$cerereSQL = 'SELECT * FROM `formular`';
$rezultat = mysql_query($cerereSQL);
 while($rand = mysql_fetch_array($rezultat)) {
 echo $rand['nume'];
 }
?> 
