<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$J= new Joueur;
$J-> init($_POST['no_joueur'],$_POST['nom_joueur'],$_POST['prenom_joueur'],$_POST['pays']);
$req="update Joueur set Nom_joueur=' ".$J->getNom()." ',Prenom_joueur=' ".$J->getPrenom()." ',Pays=' ".$J->getPays()." ' where No_joueur=' ".$J->getNo()." ' ";
$resultat=$idConnexion->query($req);
verifierErreurMySql($resultat, $idConnexion);
header("Location: ../index.php");