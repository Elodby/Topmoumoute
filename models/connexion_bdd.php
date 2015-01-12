<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=topmoumoute_bdd', 'root', '');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
?>