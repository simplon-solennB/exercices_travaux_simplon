<?php
try {
  // on ouvre une connexion à la base de données
  $connexion = new PDO('mysql:host=localhost;dbname=QuestionnaireLangues;charset=utf8','root', '');
  } catch (Exception $excp) {
    die('Erreur : ' . $excp->getMessage());
  };
 ?>
