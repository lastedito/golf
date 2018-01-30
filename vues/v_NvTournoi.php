<?php
include('../Include/include.php');
include('../Include/classe.php');
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(Numerotournoi) as maximum from tournoi");
$tab=$resultat->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="vues/css/style.css">

<form class="form" method="post" action="../action/actionNvT.php">
	<h1 class="formulaire">Nouveau Tournoi</h1>
	<fieldset class="left">
            <label class="l1"><b>Numéro du tournoi</b></label><input name="Numerotournoi" type="text" size="6" value="<?php print $tab['maximum']+1; ?>" /><fieldset class="l2"><label>Numéro du dernier tournoi</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" /></fieldset></br>
            <label class="l1"><b>NomTournoi</b></label><input name="nomtournoi" type="text" size="10"/></br>
            <label class="l1"><b>Date de début</b></label><input name="dateDebut" type="text" size="10" placeholder="aaaa/mm/jj" /></br>
            <label class="l1"><b>Date de fin</b></label><input name="dateFin" type="text" size="10" placeholder="aaaa/mm/jj"/></br>
            <label class="l1"><b>Identifiant du parcours</b></label><input name="Identifiant" type="text" size="10"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<form class="modif" method="post" action="v_ModifTournoiAsk.php" border="1">
    <input class="val" type ="submit" value="Modification de Tournoi"/>
</form>
<form class="suppr" method="post" action="v_SupprTournoiAsk.php" border="1">
    <input class="val" type ="submit" value="Supprimer un Tournoi"/>
</form>
<form class="suppr" method="post" action="v_AffTournoi.php" border="1">
    <input class="val" type ="submit" value="Afficher la liste des tournois"/>
</form>
