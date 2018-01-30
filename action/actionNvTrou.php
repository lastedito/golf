<?php
include('../Include/classe.php');
include('../Include/include.php');
$idConnexion =connecterServeurBD();
$Trous= new Trous;
$Trous-> init($_POST['NumeroTrous'],$_POST['Identifiant'],$_POST['DistNoir'],$_POST['DistJaune'],$_POST['DistBleu'],$_POST['DistRouge'],$_POST['DistBlanc'],$_POST['PAR'],$_POST['HCP']);
$req="insert into trous(NumeroTrous,Distance_noir,Distance_jaune,Distance_bleu,Distance_rouge,Distance_Blanc,PAR,HCP,Identifiant) values (' ".$Trous->getNum()." ',' ".$Trous->getDistNoir()." ',' ".$Trous->getDistJaune()." ',' ".$Trous->getDistBleu()." ',' ".$Trous->getDistRouge()." ',' ".$Trous->getDistBlanc()." ',' ".$Trous->getPar()." ',' ".$Trous->getHCP()." ',' ".$Trous->getId()." ')";
$resultat=$idConnexion->query($req);
verifierErreurMySql($resultat, $idConnexion);
header("Location: ../index.php");
//Créer les gets dans la classe
