<?php
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(No_joueur) as maximum from Joueur");
$tab=$resultat->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="vues/css/style.css">

<form class="form" method="post" action="index.php?uc=joueur&action=ValiderSuppr">
	<h1 class="formulaire">Supprimer quel Joueur?</h1>
	<fieldset class="left">
            <label class="l1"><b>No de joueur</b></label><input name="No_joueur" type="text" size="6" value="<?php print trim($tab['maximum']); ?>" /><fieldset class="l2"><label>Numéro du dernier joueur</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" /></fieldset></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<form class="modif" method="post" action="v_NvJoueurs.php" border="1">
    <input class="val" type ="submit" value="Ajouter un joueur"/>
</form>
<form class="suppr" method="post" action="v_ModifJoueursAsk.php" border="1">
    <input class="val" type ="submit" value="Modifier un joueur"/>
</form>
<form class="suppr" method="post" action="v_AffJoueurs.php" border="1">
    <input class="val" type ="submit" value="Afficher la liste des joueurs"/>
</form>