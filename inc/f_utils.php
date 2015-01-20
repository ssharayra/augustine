<?php

function getGet($cle, $valDefault = ''){
  $value = (isset($_GET[$cle]) ? $_GET[$cle] : $valDefault);     
  // $value = htmlspecialchars($value, ENT_QUOTES); // Protège des injections HTML
  return trim($value); // supprime les blancs aux extrémités
}

function getPost($cle, $valDefault = ''){
  $value = (!empty($_POST[$cle]) ? $_POST[$cle] : $valDefault);     
  // $value = htmlspecialchars($value, ENT_QUOTES); // Protège des injections HTML
  return trim($value); // supprime les blancs aux extrémités
}


