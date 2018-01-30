<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$J= new Joueur;
$J-> init($_POST['No_joueur'],$_POST['nom_joueur'],$_POST['prenom_joueur'],$_POST['pays']);
$req="delete from Joueur where No_joueur=' ".$J->getNo()." ' ";
$resultat=$idConnexion->query($req);
verifierErreurMySql($resultat, $idConnexion);
header("Location: ../index.php");