<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$J= new Joueur;
$J-> init($_POST['No_joueur'],$_POST['nom_joueur'],$_POST['prenom_joueur'],$_POST['pays']);
$req="insert into Joueur(No_joueur,Nom_joueur,Prenom_joueur,Pays) values(' ".$J->getNo()."','".$J->getNom()."','".$J->getPrenom()."','".$J->getPays()."')";
$resultat=$idConnexion->query($req);

header("Location: ../index.php");