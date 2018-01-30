<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$J= new Parcours;
$J-> init($_POST['Identifiant'],$_POST['NomParcours']);
$req="update Parcours set NomParcours=' ".$J->getNom()." ' where Identifiant=' ".$J->getIdentifiant()." ' ";
$resultat=$idConnexion->query($req);
header("Location: ../index.php");