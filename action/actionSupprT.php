<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$J= new Tournoi;
$J-> init($_POST['Numerotournoi'],$_POST['nomtournoi'], $_POST['dateDebut'], $_POST['dateFin'], $_POST['Identifiant']);
$req="delete from Tournoi where Numerotournoi=' ".$J->getNoT()." ' ";
$resultat=$idConnexion->query($req);
verifierErreurMySql($resultat, $idConnexion);
header("Location: ../index.php");