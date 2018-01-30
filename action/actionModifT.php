<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$J= new Tournoi;
$J-> init($_POST['Numerotournoi'],$_POST['nomtournoi'],$_POST['dateDebut'],$_POST['dateFin'],$_POST['Identifiant']);
$req="update Tournoi set Numerotournoi='".$J->getNoT() ."' Identifiant ='".$J->getIdentifiant()."' Nomtournoi='".$J->getNom(). "' La_Date='".$J->getDate()."' La_Date_Fin='".$J->getDateFin()."' where Numerotournoi='".$J->getNoT()."' ";
$resultat=$idConnexion->query($req);
header("Location: ../index.php");