<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$Parc= new Parcours;
$Parc-> init($_POST['Identifiant'],$_POST['NomParcours']);
$req="insert into parcours(Identifiant,NomParcours) values (' ".$Parc->getIdentifiant()." ',' ".$Parc->getNom()." ')";
$resultat=  $idConnexion->query($req);
verifierErreurMySql($resultat, $idConnexion);
header("Location: ../index.php");
