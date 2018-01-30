<?php
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(No_joueur) as maximum from Joueur");
$tab=$resultat->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="vues/css/style.css">

<form class="form" method="post" action="action/actionNvJ.php">
	<h1 class="formulaire">Nouveau Joueur</h1>
	<fieldset class="left">
            <label class="l1"><b>No de joueur</b></label><input name="No_joueur" type="text" size="6" value="<?php print trim($tab['maximum']+1); ?>" /><fieldset class="l2"><label>Numéro du dernier joueur</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" /></fieldset></br>
                                    <label class="l1"><b>Nom du joueur</b></label><input name="nom_joueur" type="text" size="10"/></br>
		<label class="l1"><b>Prenom du joueur</b></label><input name="prenom_joueur" type="text" size="10"/></br>
                                    <label class="l1"><b>Pays</b></label><input name="pays" type="text" size="10"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<li class="modif">
    <a class="val" href="index.php?uc=joueur&action=modif" ><input type="button" value="Modifer un joueur"/></a>
</li>
    <a class="val" href="index.php?uc=joueur&action=supprimer" ><input type="button" value="Supprimer un joueur"/></a>
    
    <a class="val" href="index.php?uc=joueur&action=afficher" ><input type="button" value="Afficher les joueurs"/></a>
