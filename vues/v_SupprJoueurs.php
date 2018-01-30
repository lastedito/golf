<?php
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(No_joueur) as maximum from Joueur");
$tab=$resultat->fetch();

$resultat2=$idConnexion->query("select * from Joueur where No_joueur=".$_POST['No_joueur']); //Info concernant le n° du joueur saisie
$tab2=$resultat2->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="vues/css/style.css">

<form class="form" method="post" action="action/actionSupprJ.php">
	<h1 class="formulaire">Supprimer le joueur N°<?php echo trim($_POST['No_joueur']); ?></h1>
	<fieldset class="left">
            <label class="l1"><b>No de joueur</b></label><input name="No_joueur" type="text" size="6" value="<?php print trim($tab['maximum']); ?>" /><fieldset class="l2"><label>Numéro du dernier joueur</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" /></fieldset></br>
            <label class="l1"><b>Nom du joueur</b></label><input name="nom_joueur" type="text" size="10" value="<?php echo trim($tab2[1]); ?>"/></br>
            <label class="l1"><b>Prenom du joueur</b></label><input name="prenom_joueur" type="text" size="10" value="<?php echo trim($tab2[2]); ?>"/></br>
            <label class="l1"><b>Pays</b></label><input name="pays" type="text" size="10" value="<?php echo trim($tab2[3]); ?>"/></br>          
        </fieldset>
        <input type="submit" value="Supprimer">
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