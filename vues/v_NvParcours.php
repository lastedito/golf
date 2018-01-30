<?php
include('../Include/include.php');
include('../Include/classe.php');
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(Identifiant) as maximum from parcours");
$tab=$resultat->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="vues/css/style.css">

<form class="form" method="post" action="../action/actionNvP.php">
	<h1 class="formulaire">Nouveau Parcours</h1>
	<fieldset class="left">
            <label class="l1"><b>Identifiant du Parcours</b></label><input name="Identifiant" type="text" size="6" value="<?php print $tab['maximum']+1; ?>" /><fieldset class="l2"><label>Identifiant du dernier Parcours</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" /></fieldset></br>
            <label class="l1"><b>Nom du Parcours</b></label><input name="NomParcours" type="text" size="10"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<form class="modif" method="post" action="v_ModifParcoursAsk.php" border="1">
    <input class="val" type ="submit" value="Modification de parcours"/>
</form>
<form class="suppr" method="post" action="v_SupprParcoursAsk.php" border="1">
    <input class="val" type ="submit" value="Supprimer un parcours"/>
</form>
<form class="suppr" method="post" action="v_AffParcours.php" border="1">
    <input class="val" type ="submit" value="Afficher la liste des parcours"/>
</form>
