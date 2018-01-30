<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$J= new Parcours;
$J-> init($_POST['Identifiant'],$_POST['NomParcours']);
$req="delete from Parcours where Identifiant=' ".$J->getIdentifiant()." ' ";
$resultat=$idConnexion->query($req);
verifierErreurMySql($resultat, $idConnexion);
header("Location: ../index.php");