<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=topmoumoute_bdd', 'root', '');
    mysql_query("SET NAMES UTF8");
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
?>