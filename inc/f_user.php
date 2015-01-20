<?php

////////////// USER MANAGER ///////////////////////////////////////////////////////////

/**
* permet la création d'un utilisateur à partir de données présentes dans $_POST
* @return true si le SGBDR n'a rencontré une erreur à l'exécution de l'ordre SQL
*         false sinon  
*/
function createUser(){
   $username = getPost('username');
   $pw = getPost('password');
   $authlevel = getPost('authlevel');

   // TODO faire quelques vérfications ici

   $sql = "INSERT INTO augustine2_user VALUE('','" 
          . $username 
          . "','" 
          . $pw 
          . "','" 
          . $authlevel 
          . "')";
   // print($sql); return false;
   $res = mysql_query($sql); // or die(mysql_error());
   
   return $res; // voir API mysql_query pour connaitre le sens de la valeur retournée
}

function getUserByNamePw($name, $pw) {
  //TODO
  $user = array('id'=>1, 'name'=>'testName', 'authlevel'=> 3, 'pass'=>'pass');
  return $user;
}

// LA SUITE ICI ...

