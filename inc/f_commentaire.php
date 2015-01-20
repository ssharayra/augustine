<?php
require_once('bdd_conf.php');

function getCommentairesByIdActualite($idActu) {
  global $pdo;

  $query = 'SELECT * FROM commentaire WHERE idActu=:id ORDER BY id DESC'; 
  $prep = $pdo->prepare($query);

  $prep->bindValue(':id', $idActu);
  $prep->execute();

  $commentaires = $prep->fetchAll();

  $prep->closeCursor();
  $prep = NULL;

  return $commentaires;
}


