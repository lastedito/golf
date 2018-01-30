<?php

if (!$_REQUEST){
    $uc="default";
}
else{
$uc = $_REQUEST['uc'];
}
switch($uc){
	case 'joueur':{
		include("controleurs/c_joueur.php");break;
	}
	case 'parcours' :{
		include("controleurs/c_parcours.php");break;
	}
	case 'tournois' :{
		include("controleurs/c_tournois.php");break; 
	}
                  case 'default':{
                                    include("vues/v_sommaire.php");break;
                  }
}
?>