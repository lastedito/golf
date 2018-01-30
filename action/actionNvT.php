<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$Tour= new Tournoi;
$Tour-> init($_POST['Numerotournoi'],$_POST['nomtournoi'],$_POST['dateDebut'],$_POST['dateFin'],$_POST['Identifiant']);
$req="insert into tournoi(NUMEROTOURNOI,IDENTIFIANT,NOMTOURNOI,La_Date,La_Date_Fin) values (' ".$Tour->getNoT()." ',' ".$Tour->getIdentifiant()." ',' ".$Tour->getNom()." ',' ".$Tour->getDate()." ',' ".$Tour->getDateFin()." ')";
$resultat=$idConnexion->query($req);
verifierErreurMySql($resultat, $idConnexion);
header("Location: ../index.php");
