<?php
include('../Include/include.php');
include('../Include/classe.php');
$idConnexion =connecterServeurBD();
$resultat=$idConnexion->query("select max(Numerotournoi) as maximum from tournoi");
$tab=$resultat->fetch();

$resultat2=$idConnexion->query("select * from Tournoi where Numerotournoi=".$_POST['Numerotournoi']); //Info concernant l'identifiant saisie
$tab2=$resultat2->fetch();
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/vues/css/style.css">

<form class="form" method="post" action="../action/actionModifT.php">
	<h1 class="formulaire">Modification du tournoi N°<?php echo $_POST['Numerotournoi']; ?></h1>
	<fieldset class="left">
            <label class="l1"><b>Numéro du tournoi</b></label><input name="Numerotournoi" type="text" size="6" value="<?php print $tab['maximum']; ?>" /><fieldset class="l2"><label>Numéro du dernier tournoi</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" /></fieldset></br>
            <label class="l1"><b>NomTournoi</b></label><input name="nomtournoi" type="text" size="10" value="<?php print trim($tab2[2]); ?>"/></br>
            <label class="l1"><b>Date de début</b></label><input name="dateDebut" type="text" size="10" value="<?php print trim($tab2[3]); ?>" /></br>
            <label class="l1"><b>Date de fin</b></label><input name="dateFin" type="text" size="10" value="<?php print trim($tab2[4]); ?>"/></br>
            <label class="l1"><b>Identifiant du parcours</b></label><input name="Identifiant" type="text" size="10" value="<?php print trim($tab2[1]); ?>"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>

<form class="retour" method="post" action="index.php" border="1">
    <input class="val" type ="submit" value="retour à l'acceuil"/>
</form>
<form class="retour" method="post" action="v_NvTournoi.php" border="1">
    <input class="val" type ="submit" value="Nouveau parcours"/>
</form>
<form class="suppr" method="post" action="v_SupprTournoiAsk.php" border="1">
    <input class="val" type ="submit" value="Supprimer un Tournoi"/>
</form>
<form class="suppr" method="post" action="v_AffJoueurs.php" border="1">
    <input class="val" type ="submit" value="Afficher la liste des joueurs"/>
</form>

