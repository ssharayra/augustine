<?php

require_once('bdd_conf.php');

function getLastActualite() {
  global $pdo;
  $query = 'SELECT * FROM actualite ORDER BY id DESC LIMIT 1'; 
  $prep = $pdo->prepare($query);

  $prep->execute();
  $actu = $prep->fetch();

  $prep->closeCursor();
  $prep = NULL;

  return $actu;
}


