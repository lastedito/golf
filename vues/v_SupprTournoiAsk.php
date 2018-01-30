<?php
include('../Include/include.php');
include('../Include/classe.php');
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(Numerotournoi) as maximum from tournoi");
$tab=$resultat->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="vues/css/style.css">

<form class="form" method="post" action="v_SupprTournoi.php">
	<h1 class="formulaire">Supprimer quel Tournoi ?</h1>
	<fieldset class="left">
            <label class="l1"><b>Numéro du tournoi</b></label><input name="Numerotournoi" type="text" size="6" value="<?php print $tab['maximum']; ?>" /><fieldset class="l2"><label>Numéro du dernier tournoi</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" /></fieldset></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<form class="modif" method="post" action="v_ModifTournoiAsk.php" border="1">
    <input class="val" type ="submit" value="Modification de Tournoi"/>
</form>
<form class="suppr" method="post" action="v_NvTournoi.php" border="1">
    <input class="val" type ="submit" value="Créer un Tournoi"/>
</form>
<form class="suppr" method="post" action="v_AffJoueurs.php" border="1">
    <input class="val" type ="submit" value="Afficher la liste des joueurs"/>
</form>
