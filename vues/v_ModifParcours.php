<?php
include('../Include/include.php');
include('../Include/classe.php');
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(Identifiant) as maximum from Parcours");
$tab=$resultat->fetch();

$resultat2=$idConnexion->query("select * from Parcours where Identifiant=".$_POST['Identifiant']); //Info concernant l'identifiant saisie
$tab2=$resultat2->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="vues/css/style.css">

<form class="form" method="post" action="../action/actionModifP.php">
	<h1 class="formulaire">Modification du parcours N°<?php echo $_POST['Identifiant']; ?></h1>
	<fieldset class="left">
            <label class="l1"><b>Identifiant du Parcours</b></label><input  name="Identifiant" type="text" size="5" value="<?php print trim($tab2[0]); ?>"/></label>&nbsp;&nbsp;</br></br>
            <label class="l1"><b>Nom du Parcours</b></label><input name="NomParcours" type="text" size="10" value="<?php print trim($tab2[1]); ?>"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<li class="modif">
    <a class="val" href="index.php?uc=joueur&action=nouveau" ><input type="button" value="Créer un joueur"/></a>
</li>
    <a class="val" href="index.php?uc=joueur&action=supprimer" ><input type="button" value="Supprimer un joueur"/></a>
    
    <a class="val" href="index.php?uc=joueur&action=afficher" ><input type="button" value="Afficher les joueurs"/></a>